<style>
    .cascade-slider_container {
        position: relative;
        width: 809px;
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
        background: #3F7163;
        padding: 25px 0;
        background: #3F7163;
        padding: 25px 0;
    }

    .cascade-slider_item.prev {
        left: 50%;
        transform: translateY(-50%) translateX(50%) scale(0.6);
        opacity: 1;
        z-index: 1;
        background: #3F7163;
        padding: 25px 0;
    }

    .cascade-slider_item.now {
        top: 50%;
        left: 50%;
        transform: translateY(-50%) translateX(-50%) scale(1);
        opacity: 1;
        z-index: 5;
        background: #3F7163;
        padding: 25px 0;
    }

    .cascade-slider_arrow {
        display: inline-block;
        position: absolute;
        top: 50%;
        cursor: pointer;
        z-index: 5;
    }

    .cascade-slider_arrow-left {
        left: -191px;
    }

    .cascade-slider_arrow-right {
        right: -180px;
    }

    .cascade-slider_nav {
        position: absolute;
        bottom: -120px;
        width: 100%;
        text-align: center;
        z-index: 5;
    }

    i.fas {
        font-size: 36px;
        color: #BCBCBC;
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

    .cascade-slider_dot:hover {
        background: #555;
    }

    .cascade-slider_dot.cur {
        background: #555;
    }
</style>
<section>
    <div class="cascade-slider_container" id="cascade-slider">
        <div class="cascade-slider_slides">
            <div class="cascade-slider_item this-about-slide">
                <h4>Standard Room</h4>
                <img src="img/custombedroom.png" alt="">
                <p> Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <a href="javascript:void(0);" class="custom">Book Now</a>

            </div>
            <div class="cascade-slider_item this-about-slide">
                <h4>Standard Room</h4>
                <img src="img/room1.png" alt="">
                <p> Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <a href="javascript:void(0);" class="custom">Book Now</a>

            </div>
            <div class="cascade-slider_item this-about-slide">
                <h4>Standard Room</h4>
                <img src="img/last-bed.png" alt="">
                <p> Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <a href="javascript:void(0);" class="custom">Book Now</a>

            </div>
            <div class="cascade-slider_item this-about-slide">
                <h4>Standard Room</h4>
                <img src="img/custombedroom.png" alt="">
                <p> Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <a href="javascript:void(0);" class="custom">Book Now</a>

            </div>
            <div class="cascade-slider_item this-about-slide">
                <h4>Standard Room</h4>
                <img src="img/room1.png" alt="">
                <p> Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <a href="javascript:void(0);" class="custom">Book Now</a>

            </div>
            <div class="cascade-slider_item this-about-slide">
                <h4>Standard Room</h4>
                <img src="img/last-bed.png" alt="">
                <p> Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <a href="javascript:void(0);" class="custom">Book Now</a>

            </div>
        </div>
        <span class="cascade-slider_arrow cascade-slider_arrow-left" data-action="prev"><i class="fas fa-chevron-circle-left"></i></span>
        <span class="cascade-slider_arrow cascade-slider_arrow-right" data-action="next"><i class="fas fa-chevron-circle-right"></i></span>
    </div>
</section>
