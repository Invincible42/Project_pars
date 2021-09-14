
<section>
    <div>
        <div class="flex mx-5 lg:mx-20 my-4">
            <input type="text" placeholder="Search for songs...." name="search" id="" class=" bg-parsPurple border-parsOrange p-1 border-2 rounded mx-auto mr-3 w-full focus: text-parsYellow">
            <button class="bg-parsRed rounded mx-auto"> <span class="material-icons text-parsYellow p-1.5 text-2xl">search</span></button>
        </div>
    </div>
    
</section>

<section>
    <div>
        <div class="flex lg:mx-5 my-10">
            <h2 class="m-auto text-parsYellow text-2xl lg:text-4xl">Add your own songs!</h2>
        </div>
        <div class="flex lg:mx-5 my-10">
            <div class="m-auto">
                    <label for="song_name" class="text-parsYellow">Song Title</label>
                    <input type="text" name="song_name" id="" class=" bg-parsPurple border-parsOrange p-1 border-2 rounded mx-auto   focus: text-parsYellow">
            </div> 
        </div>
        <div class="flex lg:mx-5 my-10">
            <div class="m-auto">
                <label for="song_name" class="text-parsYellow">Name of Artist</label>
                <input type="text" name="song_name" id=""class=" bg-parsPurple border-parsOrange p-1 border-2 rounded mx-auto  focus: text-parsYellow">
            </div> 
        </div>
        <div class="flex lg:mx-5 my-10">
            <div class="m-auto">
                <label for="song_name" class="text-parsYellow">Album name</label>
                <input type="text" name="song_name" id="" class=" bg-parsPurple border-parsOrange p-1 border-2 rounded mx-auto focus: text-parsYellow">
            </div>   
        </div>
        <div class="flex lg:mx-5 my-10">
            <div class="m-auto">
                <label for="song_name" class="text-parsYellow">Album name</label>
                <select name="" id="">
                    <option value="">Jazz</option>
                    <option value="">Pop</option>
                    <option value="">Rock</option>
                    <option value="">EDM</option>
                    <option value="">Metal</option>
                    <option value="">Rap</option>
                </select>
            </div>   
        </div>
        <div class="flex mx-5 my-10">
            <div class="m-auto">
                <label
                class=" w-48 flex flex-col items-center rounded-md  tracking-wide uppercase border-2  cursor-pointer hover:text-parsRed text-parsYellow ease-linear transition-all duration-150">
                    <span class="material-icons text-4xl">cloud_upload</span>
                    <span class="text-base leading-normal">Select an mp3 file</span>
                    <input type='file' class="hidden" />
                </label>
            </div>
            
        </div>
    </div>
   
</section>