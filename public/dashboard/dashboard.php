<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urielism | Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
   
    <!-- font -->

  </head>
<body class="" style="background-color: #87CEEB;">

  <nav class="bg-[#F9F6EE] border-b-4 border-black">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-center mx-auto p-4">
    <div class="absolute md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse right-20">
      <a href="login.php" class="text-purple-400 text-xl border-t-2 border-l-2 border-b-4 border-r-4 border-purple-400 bg-[#F9F6EE] hover:bg-purple-400 hover:text-white  focus:ring-4 focus:outline-none focus:ring-purple-200 font-medium rounded-lg px-4 py-2 text-center">LOGOUT</a>
    </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 ml-" id="navbar-cta">
      <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-[#F9F6EE] md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-[#F9F6EE]">
        <li>
          <a href="#" class="block py-2 px-3 text-xl font-bold md:p-0 text-gray-900 bg-purple-400 rounded md:bg-transparent md:hover:text-purple-400 md:active:text-purple-400" aria-current="page">Home</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-xl font-bold md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-purple-400 md:active:text-purple-400">About</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 md:p-0 text-xl font-bold text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-purple-400 md:active:text-purple-400">Services</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 md:p-0 text-xl font-bold text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-purple-400 md:active:text-purple-400">Contact</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>
  
  
<button data-drawer-target="separator-sidebar" data-drawer-toggle="separator-sidebar" aria-controls="separator-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 ">
  <span class="sr-only">Open sidebar</span>
  <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
  <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
  </svg>
</button>

<aside id="separator-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 border-r-4 border-black" aria-label="Sidebar">
  <div class="h-full px-3 py-4 overflow-y-auto bg-[#F9F6EE] ">
     <ul class="space-y-2 font-medium">
        <li>
           <a href="#" class="flex items-center p-2 text-purple-400 rounded-lg  hover:bg-gray-100 hover:text-purple-500  group mt-14">
            <svg class="w-5 h-5 text-purple-400 transition duration-75  group-hover:text-purple-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
              <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
              <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
           </svg>
              <span class="flex-1 ms-3 whitespace-nowrap font-bold text-2xl">Dashboard</span>
              <span class="inline-flex items-center justify-center px-2 ms-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full">Pro</span>
           </a>
        </li>
        <li>
           <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100 group">
              <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75  group-hover:text-gray-900 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                 <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z"/>
              </svg>
              <span class="flex-1 ms-3 whitespace-nowrap font-bold text-2xl">Inbox</span>
              <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full ">3</span>
           </a>
        </li>
        <li>
           <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100  group">
              <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75  group-hover:text-gray-900 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                 <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
              </svg>
              <span class="flex-1 ms-3 whitespace-nowrap font-bold text-2xl">Users</span>
           </a>
        </li>
        <li>
           <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100  group">
              <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75  group-hover:text-gray-900 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                 <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
              </svg>
              <span class="flex-1 ms-3 whitespace-nowrap font-bold text-2xl">Products</span>
           </a>
        </li>
     </ul>
     <ul class="pt-4 mt-4 space-y-2 font-medium border-t-4 border-black ">
        <li>
           <a href="#" class="flex items-center p-2 text-gray-900 transition duration-75 rounded-lg hover:bg-gray-100 ">
              <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75  group-hover:text-gray-900 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 21">
                 <path d="m5.4 2.736 3.429 3.429A5.046 5.046 0 0 1 10.134 6c.356.01.71.06 1.056.147l3.41-3.412c.136-.133.287-.248.45-.344A9.889 9.889 0 0 0 10.269 1c-1.87-.041-3.713.44-5.322 1.392a2.3 2.3 0 0 1 .454.344Zm11.45 1.54-.126-.127a.5.5 0 0 0-.706 0l-2.932 2.932c.029.023.049.054.078.077.236.194.454.41.65.645.034.038.078.067.11.107l2.927-2.927a.5.5 0 0 0 0-.707Zm-2.931 9.81c-.024.03-.057.052-.081.082a4.963 4.963 0 0 1-.633.639c-.041.036-.072.083-.115.117l2.927 2.927a.5.5 0 0 0 .707 0l.127-.127a.5.5 0 0 0 0-.707l-2.932-2.931Zm-1.442-4.763a3.036 3.036 0 0 0-1.383-1.1l-.012-.007a2.955 2.955 0 0 0-1-.213H10a2.964 2.964 0 0 0-2.122.893c-.285.29-.509.634-.657 1.013l-.01.016a2.96 2.96 0 0 0-.21 1 2.99 2.99 0 0 0 .489 1.716c.009.014.022.026.032.04a3.04 3.04 0 0 0 1.384 1.1l.012.007c.318.129.657.2 1 .213.392.015.784-.05 1.15-.192.012-.005.02-.013.033-.018a3.011 3.011 0 0 0 1.676-1.7v-.007a2.89 2.89 0 0 0 0-2.207 2.868 2.868 0 0 0-.27-.515c-.007-.012-.02-.025-.03-.039Zm6.137-3.373a2.53 2.53 0 0 1-.35.447L14.84 9.823c.112.428.166.869.16 1.311-.01.356-.06.709-.147 1.054l3.413 3.412c.132.134.249.283.347.444A9.88 9.88 0 0 0 20 11.269a9.912 9.912 0 0 0-1.386-5.319ZM14.6 19.264l-3.421-3.421c-.385.1-.781.152-1.18.157h-.134c-.356-.01-.71-.06-1.056-.147l-3.41 3.412a2.503 2.503 0 0 1-.443.347A9.884 9.884 0 0 0 9.732 21H10a9.9 9.9 0 0 0 5.044-1.388 2.519 2.519 0 0 1-.444-.348ZM1.735 15.6l3.426-3.426a4.608 4.608 0 0 1-.013-2.367L1.735 6.4a2.507 2.507 0 0 1-.35-.447 9.889 9.889 0 0 0 0 10.1c.1-.164.217-.316.35-.453Zm5.101-.758a4.957 4.957 0 0 1-.651-.645c-.033-.038-.077-.067-.11-.107L3.15 17.017a.5.5 0 0 0 0 .707l.127.127a.5.5 0 0 0 .706 0l2.932-2.933c-.03-.018-.05-.053-.078-.076ZM6.08 7.914c.03-.037.07-.063.1-.1.183-.22.384-.423.6-.609.047-.04.082-.092.129-.13L3.983 4.149a.5.5 0 0 0-.707 0l-.127.127a.5.5 0 0 0 0 .707L6.08 7.914Z"/>
              </svg>
              <span class="ms-3 font-bold text-2xl">Help</span>
           </a>
        </li>
        <li>
           <a href="#" class="flex items-center p-2 text-gray-900 transition duration-75 rounded-lg hover:bg-gray-100 ">
              <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 21">
                 <path d="m5.4 2.736 3.429 3.429A5.046 5.046 0 0 1 10.134 6c.356.01.71.06 1.056.147l3.41-3.412c.136-.133.287-.248.45-.344A9.889 9.889 0 0 0 10.269 1c-1.87-.041-3.713.44-5.322 1.392a2.3 2.3 0 0 1 .454.344Zm11.45 1.54-.126-.127a.5.5 0 0 0-.706 0l-2.932 2.932c.029.023.049.054.078.077.236.194.454.41.65.645.034.038.078.067.11.107l2.927-2.927a.5.5 0 0 0 0-.707Zm-2.931 9.81c-.024.03-.057.052-.081.082a4.963 4.963 0 0 1-.633.639c-.041.036-.072.083-.115.117l2.927 2.927a.5.5 0 0 0 .707 0l.127-.127a.5.5 0 0 0 0-.707l-2.932-2.931Zm-1.442-4.763a3.036 3.036 0 0 0-1.383-1.1l-.012-.007a2.955 2.955 0 0 0-1-.213H10a2.964 2.964 0 0 0-2.122.893c-.285.29-.509.634-.657 1.013l-.01.016a2.96 2.96 0 0 0-.21 1 2.99 2.99 0 0 0 .489 1.716c.009.014.022.026.032.04a3.04 3.04 0 0 0 1.384 1.1l.012.007c.318.129.657.2 1 .213.392.015.784-.05 1.15-.192.012-.005.02-.013.033-.018a3.011 3.011 0 0 0 1.676-1.7v-.007a2.89 2.89 0 0 0 0-2.207 2.868 2.868 0 0 0-.27-.515c-.007-.012-.02-.025-.03-.039Zm6.137-3.373a2.53 2.53 0 0 1-.35.447L14.84 9.823c.112.428.166.869.16 1.311-.01.356-.06.709-.147 1.054l3.413 3.412c.132.134.249.283.347.444A9.88 9.88 0 0 0 20 11.269a9.912 9.912 0 0 0-1.386-5.319ZM14.6 19.264l-3.421-3.421c-.385.1-.781.152-1.18.157h-.134c-.356-.01-.71-.06-1.056-.147l-3.41 3.412a2.503 2.503 0 0 1-.443.347A9.884 9.884 0 0 0 9.732 21H10a9.9 9.9 0 0 0 5.044-1.388 2.519 2.519 0 0 1-.444-.348ZM1.735 15.6l3.426-3.426a4.608 4.608 0 0 1-.013-2.367L1.735 6.4a2.507 2.507 0 0 1-.35-.447 9.889 9.889 0 0 0 0 10.1c.1-.164.217-.316.35-.453Zm5.101-.758a4.957 4.957 0 0 1-.651-.645c-.033-.038-.077-.067-.11-.107L3.15 17.017a.5.5 0 0 0 0 .707l.127.127a.5.5 0 0 0 .706 0l2.932-2.933c-.03-.018-.05-.053-.078-.076ZM6.08 7.914c.03-.037.07-.063.1-.1.183-.22.384-.423.6-.609.047-.04.082-.092.129-.13L3.983 4.149a.5.5 0 0 0-.707 0l-.127.127a.5.5 0 0 0 0 .707L6.08 7.914Z"/>
              </svg>
              <span class="ms-3 font-bold text-2xl">Settings</span>
           </a>
        </li>
     </ul>
  </div>
</aside>

<div class="p-4 sm:ml-64 ">
  <a href="<?= urlpath('dashboard/add-contact') ?>" class="font-bold pl-2 pr-4 pb-1 bg-[#BAFCA2] border-black border-l-2 border-t-2 border-b-8 border-r-8 text-2xl rounded-xl"> <b>+</b> CREATE</a>
</div>

<div class="p-4 sm:ml-64">
  <!-- <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg"> -->
    <div class="relative overflow-x-auto rounded-2xl border-b-8 border-r-8 border-t-2 border-l-2 border-black">
      <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
          <thead class="text-xs text-gray-700 uppercase bg-[#FAAB36] border-b-2 border-black">
              <tr>
                  <th scope="col" class="px-6 py-3 font-bold text-xl">
                      NO. ID
                  </th>
                  <th scope="col" class="px-6 py-3 font-bold text-xl">
                      OWNER
                  </th>
                  <th scope="col" class="px-6 py-3 font-bold text-xl">
                      NO. HP
                  </th>
                  <th scope="col" class="px-6 py-3 font-bold text-xl">
                      EMAIL
                  </th>
                  <th scope="col" class="px-6 py-3 font-bold text-xl">
                      ACTION
                  </th>
              </tr>
          </thead>
          <tbody>
              <?php
              $i = 1;
              var_dump($contacts);
                foreach ($contacts as $contact){
                  ?>
                  <tr class="bg-purple-400 border-b border-black">
                      <th scope="row" class="px-6 py-4 font-medium text-lg text-gray-900 whitespace-nowrap">
                          <?= $i ?>
                      </th>
                      <td class="px-6 py-4 text-lg font-medium text-gray-900">
                          <?= $contact['owner'] ?>
                      </td>
                      <td class="px-6 py-4 text-lg font-medium text-gray-900">
                          <?= $contact['no_hp'] ?>
                      </td>
                      <td class="px-6 py-4 text-lg font-medium text-gray-900">
                          <?= $contact['email'] ?>
                      </td>
                      <td class="px-6 py-4 flex gap-x-3">
                          <a href="<?= urlpath('dashboard/edit-contact?id='. $contact['id'])?>" class="font-medium text-lg bg-[#FAAB36] rounded-md border-t-2 border-l-2 border-b-4 border-r-4 border-black hover:underline"><i><svg class="w-6 h-6 text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                          </svg>
                          
                          </i></a>
                          <a href="<?= urlpath('dashboard/delete-contact?id='. $contact['id'])?>" class="font-medium text-lg bg-[#FF69B4] rounded-md border-t-2 border-l-2 border-b-4 border-r-4 border-black hover:underline"><i><svg class="w-6 h-6 text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                          </svg>
                          </i></a>
                      </td>
                  </tr>
              <?php
                $i++;
                  }
              ?>    
          </tbody>
      </table>
    </div>

  <!-- </div> -->
</div>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>