<!DOCTYPE html>
<html x-data="{ isLoading: true }" x-init="
  window.addEventListener('load', () => {
    isLoading = false;
  })"
  x-on:beforeunload="isLoading = true"
  class="h-full">
<head>
  <!-- Include Alpine.js and Tailwind CSS -->
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.js" defer></script>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <!-- Your HTML head content here -->
</head>
<body>
  <div x-show="isLoading" class="fixed top-0 left-0 w-full h-full bg-white z-50"></div>
  
  <div x-show="!isLoading">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab nobis delectus enim laboriosam necessitatibus ducimus debitis atque quo eligendi, architecto ex maxime placeat tempore quidem quisquam doloremque est amet excepturi totam esse corporis eius asperiores nostrum? Necessitatibus velit consequatur sint numquam dolores, hic amet officia, odio laboriosam ducimus explicabo delectus ipsum voluptas incidunt natus! Facere repellat error iure molestias quam nesciunt explicabo aspernatur nemo deleniti suscipit autem velit adipisci laboriosam facilis porro accusamus illo, qui totam tempora laborum asperiores. Neque, aliquid saepe quisquam quas eius unde obcaecati veritatis vel non voluptatibus, repellat eum deserunt libero laudantium labore, esse iusto eligendi.
  </div>
</body>
</html>
