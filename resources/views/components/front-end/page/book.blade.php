<style>
    
  
#book-section {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;

    font-family: sans-serif;

    
}

/* Book */
.book {
    position: relative;
    width: 350px;
    height: 500px;
    transition: transform 0.5s;
}

.paper {
    position: absolute;
    width: 100%;
    height: 100%;   
    top: 0;
    left: 0;
    perspective: 1500px;

}

.front,
.back {
    background-color: white;
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    transform-origin: left;
    transition: transform 0.5s;
}

.front {
    z-index: 1;
    backface-visibility: hidden;
    border-left: 3px solid powderblue;
}

.back {
    z-index: 0;
}

.front-content,
.back-content {
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

 img{
    width: 100%;
    object-fit: cover;
    height: 100%;
}



.back-content {
    transform: rotateY(180deg)
}

</style>




<img src="{{public_path('paper.jpg')}}" alt=""> 
<img src="{{public_path('read-pepar.jpg')}}" alt="">
<img src="{{public_path('paper.jpg')}}" alt=""> 
<img src="{{public_path('paper.jpg')}}" alt=""> 


<section id="book-section">
    <!-- Previous Button -->
    <button id="prev-btn">
        <i class="fas fa-arrow-circle-left"></i>
    </button>

    <!-- Book -->
    <div id="book" class="book">
        <!-- Paper 1 -->

        {{-- <div id="p1" class="paper">
            <div class="front">
                <div id="f2" class="front-content">

                    <img src="{{public_path('paper.jpg')}}" alt="">
                </div>
            </div>
            <div class="back">
                <div id="b2" class="back-content">
                    <img src="{{public_path('paper.jpg')}}" alt="">
                </div>
            </div>
        </div> --}}
        <!-- Paper 2 -->

        {{-- <div id="p2" class="paper">
            <div class="front">
               
                <div id="f1" class="front-content">
                    <img src="{{public_path('paper.jpg')}}" alt="">
                </div>
            </div>
            <div class="back">
                <div id="b1" class="back-content">
                    <img src="{{public_path('read-pepar.jpg')}}" alt="">
                </div>
            </div>
        </div> --}}
    </div>

    <!-- Next Button -->
    <button id="next-btn">
        <i class="fas fa-arrow-circle-right"></i>
    </button>

</section>

<script>

    
</script>