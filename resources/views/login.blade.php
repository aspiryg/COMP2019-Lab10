<div>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
     <!-- The comment above was added by artisan view generator, I did not write it myself -->
    <div style="border:2px solid #444; padding:10px; border-radius:10px">
                     
        <div>
            <h3>Speak Friend and Enter</h3>
            <form action="/login" method="POST">
                @csrf
                <div>
                    <label for="name">Hobbit Name</label>
                    <input type="text" name="name" id="name">
                </div>

                <br>
                <div>
                    <label for="password">Elven Secret</label>
                    <input type="password" name="password" id="password">
                </div>
                <br>
                <div>
                    <button>Enter</button>
                </div>
            </form>
        </div>
        <div>
            <p>Not yet a member of the Fellowship of the Ring?<a href="/register">Join the Fellowship</a></p>
        </div>
    </div>
</div>