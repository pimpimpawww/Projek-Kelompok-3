<x-layout-utama>
        {{-- isi halaman --}}
        <section id="menu">
            <div class="menu-header">
                <h1>Our Healthy Menu</h1>
                <p>
                    Discover our selection of healthy meals made from fresh
                    ingredients to support your balanced and active lifestyle.
                </p>
            </div>

            <div class="menu-list">
                <div class="menu-item">
                    <img
                        src="{{ asset('assets/img/salad sayur.jpg') }}"
                        alt="Garden Fresh Salad"
                    />
                    <h3>Garden Fresh Salad</h3>
                </div>

                <div class="menu-item">
                    <img
                        src="{{ asset('assets/img/smoothie b2.jpg') }}"
                        alt="Tropical Power Bowl"
                    />
                    <h3>Tropical Power Bowl</h3>
                </div>

                <div class="menu-item">
                    <img
                        src="{{ asset('assets/img/How to Make Overnight Oats.jpeg') }}"
                        alt="Golden Morning Oats"
                    />
                    <h3>Golden Morning Oats</h3>
                </div>

                <div class="menu-item">
                    <img
                        src="{{ asset('assets/img/Avocado Toast.jpg.jpeg') }}"
                        alt="Avocado Crunch Toast"
                    />
                    <h3>Avocado Crunch Toast</h3>
                </div>

                <div class="menu-item">
                    <img
                        src="{{ asset('assets/img/nasi merah.jpeg') }}"
                        alt="Healthy Grilled Chicken Rice"
                    />
                    <h3>Healthy Grilled Chicken Rice</h3>
                </div>

                <div class="menu-item">
                    <img
                        src="{{ asset('assets/img/Quinoa Sayur .jpg.jpeg') }}"
                        alt="Veggie Quinoa Bowl"
                    />
                    <h3>Veggie Quinoa Bowl</h3>
                </div>

                <div class="menu-item">
                    <img
                        src="{{ asset('assets/img/wrap salad nih.jpeg') }}"
                        alt="Grilled Chicken Veggie Wrap"
                    />
                    <h3>Grilled Chicken Veggie Wrap</h3>
                </div>

                <div class="menu-item">
                    <img
                        src="{{ asset('assets/img/Berry Yogurt.jpg.jpeg') }}"
                        alt="Berry Yogurt Bliss"
                    />
                    <h3>Berry Yogurt Bliss</h3>
                </div>

                <div class="menu-item">
                    <img
                        src="{{ asset('assets/img/Bliss Granola Bar.jpg.jpeg') }}"
                        alt="Energy Crunch Bar"
                    />
                    <h3>Energy Crunch Bar</h3>
                </div>

                <div class="menu-item">
                    <img
                        src="{{ asset('assets/img/Puding Chia.jpeg') }}"
                        alt="Chia Delight Pudding"
                    />
                    <h3>Chia Delight Pudding</h3>
                </div>
        </section>

        <section>
            <div class="menu-cta">
                <p>
                    <strong>Ready to eat healthy?</strong><br />
                    Choose your favorite menu and enjoy nutritious meals every
                    day.
                </p>
            </div>
        </section>
        {{-- /isi halaman --}}
</x-layout-utama>