<div class="p-4 bg-gray-800">


<div class="flex justify-between items-center mb-4">
    <span class="text-gray-200 text-lg font-semibold">Manage Posts</span>
    <flux:modal.trigger name="create-post">
    <flux:button variant="primary" class="px-6 py-3">Add a Post</flux:button>
    </flux:modal.trigger>
    
  </div>

<flux:modal name="create-post" class="md:w-96">
    <div class="space-y-6">
        <div>
            <flux:heading size="lg">Update profile</flux:heading>
            <flux:subheading>Make changes to your personal details.</flux:subheading>
        </div>

        <flux:input label="Name" placeholder="Your name" />

        <flux:input label="Date of birth" type="date" />

        <div class="flex">
            <flux:spacer />

            <flux:button type="submit" variant="primary">Save changes</flux:button>
        </div>
    </div>
</flux:modal>
  <!-- Text and Button -->
  

  <!-- Table -->
  <div class="overflow-x-auto">
    <table class="border border-gray-700 rounded-md w-full text-sm text-left divide-y divide-gray-700 bg-gray-800 text-sm text-white">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th scope="col" class="px-6 py-3 font-semibold whitespace-nowrap text-gray-400 border-b border-gray-700">ID</th>
          <th class="px-6 py-3 font-semibold whitespace-nowrap text-gray-400 border-b border-gray-700">Title</th>
          <th class="px-6 py-3 font-semibold whitespace-nowrap text-gray-400 border-b border-gray-700">Content</th>
          <th class="px-6 py-3 font-semibold whitespace-nowrap text-gray-400 border-b border-gray-700">Actions</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-700 border-t border-gray-700">
        <tr class="odd:bg-gray-700 even:bg-gray-800">
          <td class="px-6 py-3 whitespace-nowrap text-gray-200 border-b border-gray-700">1</td>
          <td class="px-6 py-3 whitespace-nowrap text-gray-200 border-b border-gray-700">Sample Title</td>
          <td class="px-6 py-3 whitespace-nowrap text-gray-200 border-b border-gray-700">This is the content of the post.</td>
          <td class="px-6 py-3 whitespace-nowrap text-gray-200 border-b border-gray-700">
            <flux:button variant="primary" class="px-6 py-3">Edit</flux:button>
            <flux:button variant="danger" class="px-6 py-3">Delete</flux:button>
          </td>
        </tr>
        <tr class="odd:bg-gray-700 even:bg-gray-800">
          <td class="px-6 py-3 whitespace-nowrap text-gray-200 border-b border-gray-700">2</td>
          <td class="px-6 py-3 whitespace-nowrap text-gray-200 border-b border-gray-700">Another Title</td>
          <td class="px-6 py-3 whitespace-nowrap text-gray-200 border-b border-gray-700">More content for this post.</td>
          <td class="px-6 py-3 whitespace-nowrap text-gray-200 border-b border-gray-700">
            <flux:button variant="primary" class="px-6 py-3">Edit</flux:button>
            <flux:button variant="danger" class="px-6 py-3">Delete</flux:button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
