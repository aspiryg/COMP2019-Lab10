<div>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
     <!-- Do what you will. - Ahmad Spierij -->

    <div style="border:2px solid #444; padding:10px; border-radius:10px">

        <div>
            <h3 class="text-lg font-semibold mb-4">Join the Fellowship</h3>
            <form action="/register" method="POST">
                @csrf
                <div>
                    <label for="name">
                        Hobbit Name
                    </label>
                    <input type="text" name="name" id="name">
                </div>

                <br>

                <div>
                    <label for="email">
                        Rivendell Email
                    </label>
                    <input type="email" name="email" id="email">
                </div>
                <br>
                <div>
                    <label for="password"></label>
                        Elven Secret
                    </label>
                    <input type="password" name="password" id="password">
                </div>
                <br>
                <div>
                    <button>Join the Fellowship</button>
                </div>
            </form>
        </div>
        <div>
            <p>Already a member of the Fellowship of the Ring? <a href="/">Speak friend and enter</a></p>
        </div>
    </div>
</div>
