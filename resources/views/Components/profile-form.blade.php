<div class="profile-form form">
    <h2>About</h2>
    <p class="instructions">
        Set your profile name and details. Providing additional information like your real name can help
        friends
        find you on the Playtaeu Community.
        <br>
        <br>
        Your profile name and avatar represent you throughout Playtaeu, and must be appropriate for all
        audiences.
    </p>

    <form action="/update-profile" method="POST">
        @csrf
        <h1>General</h1>
        <div class="profile-name">
            <label for="">Username</label><input type="text" name="username"
                value="{{ Auth()->user()->username ? Auth()->user()->username : '' }}">
        </div>
        <div class="real-name">
            <label for="">Real Name</label><input type="text" name="real-name"
                value="{{ Auth()->user()->username ? Auth()->user()->user_real_name : '' }}">
        </div>
        <div class="user-email">
            <label for="">Email Address</label><input type="text" name="user-email"
                value="{{ Auth()->user()->username ? Auth()->user()->user_email : '' }}">
        </div>

        <h1>Location</h1>
        <div class="country"><label for="">Country</label>
            <select name="user-country" id="">
                @if (!Auth()->user()->user_country)
                    <option value="None" selected>(Do not Display)</option>
                @else
                    <option value="None">(Do not Display)</option>
                @endif
                @if (Auth()->user()->user_country)
                    <option value="Pakistan" selected>Pakistan</option>
                @else
                    <option value="Pakistan">Pakistan</option>
                @endif
            </select>
        </div>

        <div class="province"><label for="">Province</label>
            <select name="user-province" id="">

                @if (!Auth()->user()->user_province)
                    <option value="None" selected>(Do not Display)</option>
                @else
                    <option value=" None">(Do not Display)</option>
                @endif
                @if (Auth()->user()->user_province == 'Capital Territory')
                    <option value="Capital Territory" selected>Capital Territory</option>
                @else
                    <option value="Capital Territory">Capital Territory</option>
                @endif
                @if (Auth()->user()->user_province == 'Punjab')
                    <option value="Punjab" selected>Punjab</option>
                @else
                    <option value="Punjab">Punjab</option>
                @endif
                @if (Auth()->user()->user_province == 'Khyber Pakhtunkhwa')
                    <option value="Khyber PakhtunKhwa" selected>Khyber PakhtunKhwa</option>
                @else
                    <option value="Khyber PakhtunKhwa">Khyber PakhtunKhwa</option>
                @endif
                @if (Auth()->user()->user_province == 'Sindh')
                    <option value="Sindh" selected>Sindh</option>
                @else
                    <option value="Sindh">Sindh</option>
                @endif
                @if (Auth()->user()->user_province == 'Balochistan')
                    <option value="Balochistan" selected>Balochistan</option>
                @else
                    <option value="Balochistan">Balochistan</option>
                @endif
                @if (Auth()->user()->user_province == 'Azad Kashmir')
                    <option value="Azad Kashmir" selected>Azad Kashmir</option>
                @else
                    <option value="Azad Kashmir">Azad Kashmir</option>
                @endif
                @if (Auth()->user()->user_province == 'Gilgit-Baltistan')
                    <option value="Gilgit-Baltistan" selected>Gilgit-Baltistan</option>
                @else
                    <option value="Gilgit-Baltistan">Gilgit-Baltistan</option>
                @endif
                @if (Auth()->user()->user_province == 'Federally Administered Tribal Areas')
                    <option value="Federally Administered Tribal Areas" selected>Federally Administered
                        Tribal Areas</option>
                @else
                    <option value="Federally Administered Tribal Areas">Federally Administered
                        Tribal Areas</option>
                @endif
            </select>
        </div>
        <h1>Summary</h1>
        <div class="summary"><textarea name="user-summary" id=""
                rows="5">{{ Auth()->user()->user_summary ? Auth()->user()->user_summary : 'No information given.' }}</textarea>
        </div>

        <div class="button-container">
            <button type="reset" class="cancel">Cancel</button>
            <button type="submit" class="save">Submit</button>
        </div>
    </form>
</div>
