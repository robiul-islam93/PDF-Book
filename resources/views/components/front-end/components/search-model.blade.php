
<style>
    .search {
        text-align: center;
        margin-top: 20px;
    }
    .custom-image {
        width: 150px; /* Example width */
        height: auto; /* Maintain aspect ratio */
        /* Add any other styles you want */
    }

    .content-container {
        display: flex;
    }

    .image-container {
        margin-right: 20px;
    }
</style>
</style>


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
                        <input type="search" id="member" name="member" placeholder="Search.....">
                        <button type="submit" name="memberbtn"><i class="fas fa-search"></i></button>
                    </form>
                    <p>To search for words in the flipbook, type the keywords in the field (minimum of 3
                        characters).</p>
                    <p>The results will display all existing matches to any of the keywords.</p>
                    <p>If you only wish to see results which include a specific phrase or combination of keywords,
                        place quotations around the phrase or word combination.</p>
                    <p>For example: "Instruction manual" "API documentation Summer shoe styles</p>
                    <!-- Result message -->
                    <p id="searchResultMessage" style="display: none;"></p>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById("searchForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent form submission
    
        // Get the value entered in the search input
        var membarName = document.getElementById("member").value;
    
        // Check if the condition is met
        if (
            membarName.toLowerCase() === "flip book" ||
            membarName.toLowerCase() === "book"
        ) {
            // Create an array of image sources
            var imageSources = [
                "{{ asset('front-end/asset/image/filip-book.jpg') }}",
                "{{ asset('front-end/asset/image/filip-book.jpg') }}",
                "{{ asset('front-end/asset/image/filip-book.jpg') }}",
                "{{ asset('front-end/asset/image/filip-book.jpg') }}"
            ];
    
            // Create a div to contain the images and points
            var contentContainer = document.createElement("div");
            contentContainer.classList.add("content-container");
    
            // Loop through the image sources and create img elements
            for (var i = 0; i < imageSources.length; i++) {
                // Create an image element
                var image = document.createElement("img");
                image.src = imageSources[i];
                image.alt = "Flip Book Image " + (i + 1);
                image.classList.add("custom-image");
                
                // Create a paragraph element for the point
                var point = document.createElement("p");
                point.textContent = (i + 1);
                
    
                // Create a div to wrap the image and point
                var itemContainer = document.createElement("div");
                itemContainer.classList.add("image-container");
                itemContainer.appendChild(image);
                itemContainer.appendChild(point);
    
                // Append the item container to the content container
                contentContainer.appendChild(itemContainer);
            }
    
            // Set the content of the result message to the content container
            var searchResultMessage = document.getElementById("searchResultMessage");
            searchResultMessage.innerHTML = ""; // Clear previous content
            searchResultMessage.appendChild(contentContainer);
    
            // Show the result message
            searchResultMessage.style.display = "block";
        } else {
            // Display not found message
            document.getElementById("searchResultMessage").textContent = "Book not found.";
            document.getElementById("searchResultMessage").style.display = "block";
        }
    });
    </script>