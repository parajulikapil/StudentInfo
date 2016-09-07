<div class="profile">
    <ul>
        <li>
            Name: {{$userData->fullname}}
        </li>
        <li>
            <img src="{{ asset($userData->image_location) }}" alt="" width="300px">
        </li>
    </ul>
</div>