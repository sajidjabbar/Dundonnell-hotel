<style>
    .cascade-slider_container {
        position: relative;
        width: 1000px;
        height: 500px;
        margin: 0 auto;
    }

    .cascade-slider_item {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translateY(-50%) translateX(-50%) scale(0.3);
        transition: all 1s ease;
        opacity: 0;
        z-index: -1;
    }

    .cascade-slider_item.next {
        left: 50%;
        transform: translateY(-50%) translateX(-150%) scale(0.6);
        opacity: 1;
        z-index: 1;
    }

    .cascade-slider_item.prev {
        left: 50%;
        transform: translateY(-50%) translateX(50%) scale(0.6);
        opacity: 1;
        z-index: 1;
    }

    .cascade-slider_item.now {
        top: 50%;
        left: 50%;
        transform: translateY(-50%) translateX(-50%) scale(1);
        opacity: 1;
        z-index: 5;
    }
    .cascade-slider_arrow {
        display: inline-block;
        position: absolute;
        top: 50%;
        cursor: pointer;
        z-index: 5;
    }

    .cascade-slider_arrow-left { left: 0; }

    .cascade-slider_arrow-right { right: 0; }

    .cascade-slider_nav {
        position: absolute;
        bottom: -120px;
        width: 100%;
        text-align: center;
        z-index: 5;
    }

    .cascade-slider_dot {
        display: inline-block;
        width: 1em;
        height: 1em;
        margin: 1em;
        background: #ddd;
        list-style: none;
        cursor: pointer;
    }

    .cascade-slider_dot:hover { background: #555; }

    .cascade-slider_dot.cur { background: #555; }
</style>
<section>
    <div class="cascade-slider_container" id="cascade-slider">
        <div class="cascade-slider_slides">
            <div class="cascade-slider_item">
                <h4>Standard Room</h4>
                <img src="https://placeimg.com/329/280/animals" alt="">
                <a href="javascript:void(0);">Book Now</a>
            </div>
            <div class="cascade-slider_item">
                <h3>Pic 2</h3>
                <img src="https://placeimg.com/329/280/arch" alt="">
            </div>
            <div class="cascade-slider_item">
                <h3>Pic 3</h3>
                <img src="https://placeimg.com/329/280/nature" alt="">
            </div>
            <div class="cascade-slider_item">
                <h3>Pic 4</h3>
                <img src="https://placeimg.com/329/280/people" alt="">
            </div>
            <div class="cascade-slider_item">
                <h3>Pic 5</h3>
                <img src="https://placeimg.com/329/280/tech" alt="">
            </div>
            <div class="cascade-slider_item">
                <h3>Pic 6</h3>
                <img src="https://placeimg.com/329/280/sepia" alt="">
            </div>
        </div>
        <span class="cascade-slider_arrow cascade-slider_arrow-left" data-action="prev">Prev</span>
        <span class="cascade-slider_arrow cascade-slider_arrow-right" data-action="next">Next</span>
    </div>
</section>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="js/cascade-slider.js"></script>
<script>
    $('#cascade-slider').cascadeSlider({

    });
</script>