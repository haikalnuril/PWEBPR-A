<body style="background-color: #87CEEB;" class="w-screen h-screen flex items-center">
<div class="container mx-auto  justify-center w-1/2">
    <div class="mt-5 bg-[#FAAB36] px-3 py-3 rounded-xl border-black border-l-2 border-t-2 border-b-8 border-r-8">
        <h2 class="font-medium text-4xl">Input Data</h2>
        <form action="<?= urlpath('dashboard/add-contact') ?>" method="post">
            <div class="form-group">
                <label>Owner :</label>
                <input type="text" name="owner" class="w-full border-4 rounded-lg" placeholder="Owner name" required/>
            </div>
            <div class="form-group">
                <label>No HP :</label>
                <input type="text" name="no_hp" class="w-full border-4 rounded-lg" placeholder="Your No HP" required/>
            </div>
            <div class="form-group">
                <label>Email :</label>
                <textarea name="email" class="w-full border-black border-2 rounded-xl " rows="5"placeholder="Email@example.com" required></textarea>
            </div>       

            <button type="submit" name="submit" class="w-full px-3 py-2 bg-purple-400 rounded-xl border-black border-l-2 border-t-2 border-b-8 border-r-8 font-bold">Submit</button>
        </form>
    </div>
</div>
</body>
</html>