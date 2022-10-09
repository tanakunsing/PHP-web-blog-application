<link
      href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap"
      rel="stylesheet"
    />
<script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"
      defer
    ></script>
   
    <div class="REMOVE-THIS-ELEMENT-IF-YOU-ARE-USING-THIS-PAGE hidden treact-popup fixed inset-0 flex items-center justify-center" style="background-color: rgba(0,0,0,0.3);">
        <div class="max-w-lg p-8 sm:pb-4 bg-white rounded shadow-lg text-center sm:text-left">
          
          <h3 class="text-xl sm:text-2xl font-semibold mb-6 flex flex-col sm:flex-row items-center">
           
            Free TailwindCSS Component Kit!
          </h3>  
          <form action= "<?php $_SERVER['PHP_SELF'];?>" method="POST">
          <input type="submit" name="submit" value="Enter" 
                class="w-full max-w-xs font-bold shadow-sm rounded-lg py-3 bg-indigo-100 text-gray-800 flex items-center justify-center transition-all duration-300 ease-in-out focus:outline-none hover:shadow focus:shadow-sm focus:shadow-outline"
              />
              </form> 
              <button 
               class="w-full max-w-xs font-bold shadow-sm rounded-lg py-3 bg-indigo-100 text-gray-800 flex items-center justify-center transition-all duration-300 ease-in-out focus:outline-none hover:shadow focus:shadow-sm focus:shadow-outline mt-5"
              >
                <div class="bg-white p-1 rounded-full">
               
                </div>
                <a class="ml-4"  href="register.html" >
                 Register
                </a>
              </button>
          <div class="mt-8 pt-8 sm:pt-4 border-t -mx-8 px-8 flex flex-col sm:flex-row justify-end leading-relaxed">
          <form action= "<?php $_SERVER['PHP_SELF'];?>" method="POST">
            <input type="submit" name="submit2" value="Close" class="close-treact-popup px-8 py-3 sm:py-2 rounded border border-gray-400 hover:bg-gray-200 transition duration-300">
            </form> 
          </div>
        </div>
      </div>
  
    <!-- Footer-->
    <?php include 'footer.php';?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>
<script>
  /* YOU DONT NEED THESE, these are just for the popup you see */
function closeTreactPopup(){ 
  document.querySelector(".treact-popup").classList.add("hidden");
}
function openTreactPopup(){ 
  document.querySelector(".treact-popup").classList.remove("hidden");
}
document.querySelector(".close-treact-popup").addEventListener("click", closeTreactPopup);
setTimeout(openTreactPopup, 3000)
</script>