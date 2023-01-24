<div class="nav-container">
    <nav class="nav-bar">
        <div class="nav-brand">
            <span><?= $wedding_name; ?></span>
        </div>
        <button class="nav-btn" aria-controls="nav-links" id="nav-btn" type="button" aria-label="Menu" aria-expanded="false">

            <svg class="hamburger" viewBox="0 0 100 100" width="50">
                <rect class="line top" width="80" height="5" x="10" y="25" rx="2.5"></rect>
                <rect class="line middle" width="80" height="5" x="10" y="45" rx="2.5"></rect>
                <rect class="line bottom" width="80" height="5" x="10" y="65" rx="2.5"></rect>

            </svg>
            <span class="sr-only">Menu</span>
        </button>
        <ul class="nav-links" id="nav-links" data-state="closed">
            <li><a href="">RSVP</a></li>
            <li><a href="">Our Story</a></li>
            <li><a href="">The Big Day</a></li>
            <li><a href="">Gallery</a></li>
            <li><a href="">Gift List</a></li>
            <li><a href="">Contact Us</a></li>
        </ul>



    </nav>
</div>