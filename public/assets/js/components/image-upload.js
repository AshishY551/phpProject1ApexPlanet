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







//🧪 3.1 old. Image Validation: File Size + Dimensions

// function previewMultipleImages(event) {
//   const previewContainer = document.getElementById('previewContainer');
//   previewContainer.innerHTML = '';

//   const files = event.target.files;
//   const maxSizeMB = 3;
//   const maxFiles = 5;

//   if (files.length > maxFiles) {
//     alert(`❌ Maximum ${maxFiles} images allowed.`);
//     event.target.value = "";
//     return;
//   }

//   Array.from(files).forEach(file => {
//     if (!file.type.startsWith('image/')) return;

//     if (file.size > maxSizeMB * 1024 * 1024) {
//       alert(`❌ ${file.name} exceeds ${maxSizeMB}MB.`);
//       return;
//     }

//     const reader = new FileReader();
//     reader.onload = e => {
//       const img = document.createElement('img');
//       img.src = e.target.result;
//       img.alt = "Preview";
//       img.className = "rounded-lg w-full h-40 object-cover shadow";
//       previewContainer.appendChild(img);
//     };
//     reader.readAsDataURL(file);
//   });
// }

