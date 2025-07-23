<!-- Delete Confirmation Modal -->
<div id="deleteModal" class="fixed inset-0 bg-black/50 z-50 hidden items-center justify-center">
    <div class="bg-white dark:bg-gray-800 w-[90%] max-w-md rounded-xl shadow-lg transform transition-all scale-95 p-6 space-y-4">
        <h2 class="text-xl font-bold text-gray-800 dark:text-white">🗑️ Confirm Delete</h2>
        <p class="text-gray-600 dark:text-gray-300">
            Are you sure you want to permanently delete this post? This action cannot be undone.
        </p>

        <div class="flex justify-end space-x-3">
            <button onclick="closeDeleteModal()"
                class="px-4 py-2 rounded-md bg-gray-200 dark:bg-gray-600 text-gray-800 dark:text-white hover:bg-gray-300 dark:hover:bg-gray-500 transition">
                Cancel
            </button>
            <button id="confirmDeleteBtn"
                class="px-4 py-2 rounded-md bg-red-500 text-white hover:bg-red-600 transition">
                Yes, Delete
            </button>
        </div>
    </div>
</div>