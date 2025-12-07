<div>
    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->

    <div style="border:2px solid #444; padding:10px; border-radius:10px">
         <!-- Use labels, names and texts from the Lord of the Rings universe -->
        @auth
        <div>
            <h3 class="text-lg font-semibold mb-4">
                Welcome to Rivendell!
            </h3>
            <p>
                Greetings, {{ auth()->user()->name }}. You have successfully entered the hidden refuge of the Elves. Feel free to explore the wisdom and beauty that Rivendell has to offer.
            </p>

            <div>
                <form action="/logout" method="POST">
                    @csrf
                    <button>
                        Leave Rivendell
                    </button>
                </form>
            </div>
        </div>
        @else
        <div>
            <h3 class="text-lg font-semibold mb-4">Access Denied - You shall not pass!</h3>
            <p> 
                You must be a member of the Fellowship of the Ring to enter Rivendell. Please <a href="/">speak friend and enter</a> to join the Fellowship.
        </div>
        @endauth
    </div>
</div>
