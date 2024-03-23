<div class="search">
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Search</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="overview-main-search">
                    <form id="searchForm">
                        <input type="search" id="member" name="member" placeholder="Search....."><span>
                            <button type="submit" name="memberbtn"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </span>
                    </form>
                    <p>To search for words in the flipbook, type the keywords in the field (minimum of 3
                        characters). </p>
                    <p>The results will display all existing matches to any of the keywords.</p>

                    <p>If you only wish to see results which include a specific phrase or combination of keywords,
                        place quotations around the phrase or word combination.</p>

                    <p> For example: "Instruction manual" "API documentation Summer shoe styles</p>

                    <!-- Result message -->
                    <p id="searchResultMessage" style="display: none;"></p>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <script>
    document.getElementById("searchForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent form submission

        // Get the value entered in the search input
        var membarName = document.getElementById("member").value;

        // Check if the condition is met
        if (
            membarName.toLowerCase() === "imtiaz" ||
            membarName.toLowerCase() === "ismail"
        ) {
            // Create an image element
            var image = document.createElement("img");
            image.src = "{{ asset('book.jpg') }}"; // Set the image source
            image.width = "80px";
            // Create a div to wrap the image
            var imageWrapper = document.createElement("div");
            imageWrapper.appendChild(image);
            
            // Set the content of the result message to the image wrapper
            document.getElementById("searchResultMessage").innerHTML = imageWrapper.outerHTML; // Set success message
            document.getElementById("searchResultMessage").style.display = "block"; // Show message
        } else {
            document.getElementById("searchResultMessage").textContent = "Not Found Book"; // Set not found message
            document.getElementById("searchResultMessage").style.display = "block"; // Show message
        }
    });
</script> --}}

<script>
    document.getElementById("searchForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent form submission

        // Get the value entered in the search input
        var membarName = document.getElementById("member").value;

        // Check if the condition is met
        if (
            membarName.toLowerCase() === "filip book" ||
            membarName.toLowerCase() === "book"
        ) {
            // Create an image element
            var image = document.createElement("img");
            image.src = "{{ asset('book.jpg') }}"; // Set the image source
            image.classList.add("custom-image"); // Add a class to the image element
            
            // Create a div to wrap the image
            var imageWrapper = document.createElement("div");
            imageWrapper.appendChild(image);
            
            // Set the content of the result message to the image wrapper
            document.getElementById("searchResultMessage").innerHTML = imageWrapper.outerHTML; // Set success message
            document.getElementById("searchResultMessage").style.display = "block"; // Show message
        } else {
            document.getElementById("searchResultMessage").textContent = "Not Found Book"; // Set not found message
            document.getElementById("searchResultMessage").style.display = "block"; // Show message
        }
    });
</script>
<style>
    .custom-image {
    width: 80px; /* Example width */
    height: auto; /* Maintain aspect ratio */
    /* Add any other styles you want */
}

</style>