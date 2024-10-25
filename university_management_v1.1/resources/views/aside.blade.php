<div class="hidden"> @include("navigation")</div>
<aside class="w-64 bg-gray-800 text-gray-100">
  <div class="h-full flex flex-col">
      <nav class="flex-grow p-4 space-y-4">
          <a href="{{ route('dashboard') }}" class="block px-4 py-2 bg-gray-700 rounded hover:bg-gray-600">Dashboard</a>
          <a href="{{ route('teachers.index') }}" class="block px-4 py-2 bg-gray-700 rounded hover:bg-gray-600">Teachers</a>
          <a href="{{ route('students.index') }}" class="block px-4 py-2 bg-gray-700 rounded hover:bg-gray-600">Students</a>
          <a href="{{ route('classes.index') }}" class="block px-4 py-2 bg-gray-700 rounded hover:bg-gray-600">Classes</a>
          <a href="{{ route('groups.index') }}" class="block px-4 py-2 bg-gray-700 rounded hover:bg-gray-600">Groups</a>
          <a href="{{ route('admin.settings') }}" class="block px-4 py-2 bg-gray-700 rounded hover:bg-gray-600">Settings</a>
      </nav>
  </div>
</aside>
