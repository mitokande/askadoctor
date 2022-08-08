<div>
    {{ $doctors->links() }}

    @foreach ($doctors as $doctor)
    <div wire:key="item-{{ $doctor->id }}" class="strip_list wow fadeIn">
        <a href="#0" class="wish_bt"></a>
        <figure>
            <a href="/{{$doctor->username}}"><img src="{{$doctor->profile_picture}}" alt=""></a>
        </figure>
        <small>{{$doctor->specilization}}</small>
        <h3>{{$doctor->first_name.' '.$doctor->last_name}}</h3>
        <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
        <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
        <a href="badges.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Badge Level" class="badge_list_1"><img src="../img/badges/badge_1.svg" width="15" height="15" alt=""></a>
        <ul>
            <li><a href="#0" onclick="onHtmlClick('Doctors', 0)" class="btn_listing">View on Map</a></li>
            <li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Directions</a></li>
            <li><a href="detail-page.html">Book now</a></li>
        </ul>
    </div>
    @endforeach

    {{ $doctors->links() }}

</div>
