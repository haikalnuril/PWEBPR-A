<body style="background-color: #BAFCA2;" class="w-screen h-screen flex items-center">
<div class="container mx-auto  justify-center w-1/2">
    <div class="mt-5 bg-[#FAAB36] px-3 py-3 rounded-xl border-black border-l-2 border-t-2 border-b-8 border-r-8">
        <h2 class="font-medium text-4xl">Update Data</h2>

        <?php
            var_dump($contact);
        ?>
        <form action="<?= urlpath('dashboard/edit-contact?id='.$contact[0]['id'])?>" method="post">
            <div class="form-group">
                <label>Owner :</label>
                <input type="text" name="owner" class="w-full border-4 rounded-lg" placeholder="Owner name" value="<?= $contact[0]['owner'] ?>" required/>
            </div>
            <div class="form-group">
                <label>No HP :</label>
                <input type="text" name="no_hp" class="w-full border-4 rounded-lg" placeholder="Your No HP" value="<?= $contact[0]['no_hp'] ?>" required/>
            </div>
            <div class="form-group">
                <label>Email :</label>
                <input type="text" name="email" class="w-full border-4 rounded-lg mb-10" placeholder="Your No HP" value="<?= $contact[0]['email'] ?>" required/>
            </div> 

            <button type="submit" name="submit" class="w-full px-3 py-2 bg-purple-400 rounded-xl border-black border-l-2 border-t-2 border-b-8 border-r-8 font-bold">Update</button>
        </form>
    </div>
</div>
</body>