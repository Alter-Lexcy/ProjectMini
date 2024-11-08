<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Tombol untuk membuka modal -->
    <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded" onclick="openModal()">
      Add Assignment
    </button>

    <!-- Modal untuk menambah atau mengedit assignment -->
    <div id="assignmentModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex justify-center items-center hidden">
      <div class="bg-white rounded-lg shadow-lg max-w-md w-full p-6">
        <div class="flex justify-between items-center pb-3">
          <h3 class="text-lg font-semibold">Add Assignment</h3>
          <button class="text-gray-500 hover:text-gray-700" onclick="closeModal()">✕</button>
        </div>
        <form id="assignmentForm" method="POST" action="{{ route('assignments.store') }}">
          @csrf
          <div class="mb-4">
            <label for="module_id" class="block text-gray-700">Module ID</label>
            <input type="number" id="module_id" name="module_id" placeholder="Enter Module ID" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
          </div>
          <div class="mb-4">
            <label for="title" class="block text-gray-700">Title</label>
            <input type="text" id="title" name="title" placeholder="Enter Title" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
          </div>
          <div class="mb-4">
            <label for="description" class="block text-gray-700">Description</label>
            <textarea id="description" name="description" placeholder="Enter Description" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
          </div>
          <div class="mb-4">
            <label for="date_collection" class="block text-gray-700">Date of Collection</label>
            <input type="date" id="date_collection" name="date_collection" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
          </div>
          <div class="flex justify-end">
            <button type="button" class="bg-gray-300 text-gray-700 px-4 py-2 rounded mr-2" onclick="closeModal()">Cancel</button>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save Assignment</button>
          </div>
        </form>
      </div>
    </div>

    <script>
      function openModal() {
        document.getElementById('assignmentModal').classList.remove('hidden');
      }

      function closeModal() {
        document.getElementById('assignmentModal').classList.add('hidden');
      }
    </script>
</body>
</html>
