<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>
<body class="bg-gray-600">
    
    <section class="mt-10 flex">
        <div class="bg-gradient-to-r from-rose-100 to-teal-100 rounded-3xl border-8 mb-5 border-red-900 py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add a new Wiki</h2>
                <form class="" action="#">
                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Wiki Name</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Wiki Image</label>
                        <input type="file" name="image" id="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                    </div>
                    <div class="w-full flex flex-wrap">
                        <div class="w-full"><p>Tags</p></div>
                            <div class="flex items-center me-4">
                                <input id="inline-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="inline-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Inline 1</label>
                            </div>
                            <div class="flex items-center me-4">
                                <input id="inline-2-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="inline-2-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Inline 2</label>
                            </div>
                            <div class="flex items-center me-4">
                                <input checked id="inline-checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="inline-checked-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Inline checked</label>
                            </div>
                            <div class="flex items-center me-4">
                                <input id="inline-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="inline-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Inline 1</label>
                            </div>
                            <div class="flex items-center me-4">
                                <input id="inline-2-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="inline-2-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Inline 2</label>
                            </div>
                            <div class="flex items-center me-4">
                                <input checked id="inline-checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="inline-checked-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Inline checked</label>
                            </div>
                            <div class="flex items-center me-4">
                                <input id="inline-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="inline-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Inline 1</label>
                            </div>
                            <div class="flex items-center me-4">
                                <input id="inline-2-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="inline-2-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Inline 2</label>
                            </div>
                            <div class="flex items-center me-4">
                                <input checked id="inline-checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="inline-checked-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Inline checked</label>
                            </div>
                        
                    </div>
                    <div>
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                        <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Select category</option>
                            <option value="TV">TV/Monitors</option>
                            <option value="PC">PC</option>
                            <option value="GA">Gaming/Console</option>
                            <option value="PH">Phones</option>
                        </select>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <textarea id="description" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Your description here"></textarea>
                    </div>
                </div>
                <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Add Wiki
                </button>
            </form>
        </div>
    </section>
    <section class="p-3 sm:p-5 antialiased ">
        <div class="bg-gradient-to-r from-rose-100 to-teal-100 rounded-3xl mx-auto max-w-screen-xl px-4 lg:px-12">
                <!-- Start coding here -->
                <div class="bg-white relative shadow-md sm:rounded-lg overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-4 py-4">Wiki name</th>
                                    <th scope="col" class="px-4 py-3">Category</th>
                                    <th scope="col" class="px-4 py-3">Tags</th>
                                    <th scope="col" class="px-4 py-3">Description</th>
                                    <th scope="col" class="px-4 py-3">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">Apple iMac 27&#34;</th>
                                    <td class="px-4 py-3">PC</td>
                                    <td class="px-4 py-3">Apple</td>
                                    <td class="px-4 py-3 max-w-[12rem] truncate">What is a product description? A product description describes a product.</td>
                                    <td class="px-4 py-3 flex justify-end">
                                        <a class="text-black" href="">Delete </a>
                                         ||
                                        <a class="text-black" href="">Modify</a>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">Apple iMac 27&#34;</th>
                                    <td class="px-4 py-3">PC</td>
                                    <td class="px-4 py-3">Apple</td>
                                    <td class="px-4 py-3 max-w-[12rem] truncate">What is a product description? A product description describes a product.</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <a class="text-black" href="">Delete </a>
                                         ||
                                        <a class="text-black" href="">Modify</a>
                                    </td>
                                </tr>
                            
                            </div>
                  
        </section>

</body>
<script>
    tailwind.config = {
        darkMode: 'class',
        theme: {
            extend: {
            colors: {
                primary: {"50":"#eff6ff","100":"#dbeafe","200":"#bfdbfe","300":"#93c5fd","400":"#60a5fa","500":"#3b82f6","600":"#2563eb","700":"#1d4ed8","800":"#1e40af","900":"#1e3a8a","950":"#172554"}
            }
            },
            fontFamily: {
            'body': [
            'Inter', 
            'ui-sans-serif', 
            'system-ui', 
            '-apple-system', 
            'system-ui', 
            'Segoe UI', 
            'Roboto', 
            'Helvetica Neue', 
            'Arial', 
            'Noto Sans', 
            'sans-serif', 
            'Apple Color Emoji', 
            'Segoe UI Emoji', 
            'Segoe UI Symbol', 
            'Noto Color Emoji'
        ],
            'sans': [
            'Inter', 
            'ui-sans-serif', 
            'system-ui', 
            '-apple-system', 
            'system-ui', 
            'Segoe UI', 
            'Roboto', 
            'Helvetica Neue', 
            'Arial', 
            'Noto Sans', 
            'sans-serif', 
            'Apple Color Emoji', 
            'Segoe UI Emoji', 
            'Segoe UI Symbol', 
            'Noto Color Emoji'
        ]
            }
        }
        }
</script>
</html>