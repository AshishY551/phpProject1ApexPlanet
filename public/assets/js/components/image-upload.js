//✅ JavaScript (Drag-Drop + Click to trigger input):

const dropZone = document.getElementById('dropZone');
const fileInput = document.getElementById('imageUpload');

dropZone.addEventListener('click', () => fileInput.click());

dropZone.addEventListener('dragover', e => {
  e.preventDefault();
  dropZone.classList.add('border-blue-600', 'text-blue-600');
});
dropZone.addEventListener('dragleave', () => {
  dropZone.classList.remove('border-blue-600', 'text-blue-600');
});
dropZone.addEventListener('drop', e => {
  e.preventDefault();
  dropZone.classList.remove('border-blue-600', 'text-blue-600');
  fileInput.files = e.dataTransfer.files;
  previewMultipleImages({ target: fileInput });
});

// New 3.1  Image Validation: File Size + Dimensions

function previewMultipleImages(event) {
  const previewContainer = document.getElementById('previewContainer');
  previewContainer.innerHTML = '';

  const files = event.target.files;
  const maxSizeMB = 3;
  const maxFiles = 5;
  const validTypes = ['image/jpeg', 'image/png', 'image/webp', 'image/gif'];

  if (files.length > maxFiles) {
    alert(`❌ Maximum ${maxFiles} images allowed.`);
    event.target.value = "";
    return;
  }

  Array.from(files).forEach((file, index) => {
    if (!validTypes.includes(file.type)) {
      alert(`❌ ${file.name} is not a supported image type.`);
      return;
    }

    if (file.size > maxSizeMB * 1024 * 1024) {
      alert(`❌ ${file.name} exceeds ${maxSizeMB}MB.`);
      return;
    }

    const reader = new FileReader();
    reader.onload = e => {
      // Wrapper div with delete button
      const wrapper = document.createElement('div');
      wrapper.className = "relative group w-40 h-40 animate-fade-in";

      const img = document.createElement('img');
      img.src = e.target.result;
      img.alt = `Image ${index + 1}`;
      img.className = "rounded-lg w-full h-40 object-cover shadow";

      const btn = document.createElement('button');
      btn.type = "button";
      btn.className = "absolute top-2 right-2 bg-red-500 text-white p-1 rounded-full   group-hover:flex   items-center justify-center transition duration-200 z-50";  //group-hover:block hidden group group-hover
      btn.innerHTML = '<i class="fas fa-times"></i>';
      btn.onclick = () => wrapper.remove();  // simple delete

      wrapper.appendChild(img);
      wrapper.appendChild(btn);
      previewContainer.appendChild(wrapper);
    };
    reader.readAsDataURL(file);
  });
}



// Add Cropper Logic 

let cropper;
let tempFile;

// Open Cropper modal when file is selected
fileInput.addEventListener('change', (e) => {
  const file = e.target.files[0];
  if (!file || !file.type.startsWith('image/')) return;

  const reader = new FileReader();
  reader.onload = () => {
    document.getElementById('cropperImage').src = reader.result;
    document.getElementById('cropperModal').classList.remove('hidden');

    // wait until image is rendered
    setTimeout(() => {
      const image = document.getElementById('cropperImage');
      cropper = new Cropper(image, {
        aspectRatio: 16 / 9,
        viewMode: 1,
        autoCropArea: 1
      });
    }, 100);

    tempFile = file; // Save for later input sync
  };
  reader.readAsDataURL(file);
});

function closeCropper() {
  document.getElementById('cropperModal').classList.add('hidden');
  if (cropper) {
    cropper.destroy();
    cropper = null;
  }
}

// When user confirms crop
function cropAndInsert() {
  if (!cropper) return;

  cropper.getCroppedCanvas().toBlob(blob => {
    // Convert blob to file
    const croppedFile = new File([blob], tempFile.name, { type: blob.type });

    // Add to previewContainer
    const reader = new FileReader();
    reader.onload = e => {
      const wrapper = document.createElement('div');
      wrapper.className = "relative group animate-fade-in";

      const img = document.createElement('img');
      img.src = e.target.result;
      img.className = "rounded-lg w-full h-40 object-cover shadow";

      const btn = document.createElement('button');
      btn.type = "button";
      btn.className = "absolute top-2 right-2 bg-red-500 text-white p-1 rounded-full hidden group-hover:block";
      btn.innerHTML = '<i class="fas fa-times"></i>';
      btn.onclick = () => {
        wrapper.remove();
        selectedFiles = selectedFiles.filter(f => f.name !== croppedFile.name);
      };

      wrapper.appendChild(img);
      wrapper.appendChild(btn);
      document.getElementById('previewContainer').appendChild(wrapper);
    };
    reader.readAsDataURL(croppedFile);

    // Save file to form input manually
    selectedFiles.push(croppedFile);
    syncFilesToInput();

    closeCropper();
  });
}

// Sync Files with Hidden File Input
let selectedFiles = [];

function syncFilesToInput() {
  const dataTransfer = new DataTransfer();
  selectedFiles.forEach(file => dataTransfer.items.add(file));
  document.getElementById('finalImageInput').files = dataTransfer.files;
}
