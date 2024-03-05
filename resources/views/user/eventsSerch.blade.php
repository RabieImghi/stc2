@foreach($events as $event)
<div class="col-lg-6">
    <div class="team__item aos-init aos-animate" data-aos="fade-left" data-aos-duration="900">
        <div class="team__item-inner">
            <div class="team__item-thumb">
                <img src="./images/{{$event->image}}" style="height: 250px"  alt="Team Image">
            </div>
            <div class="team__item-content">
                <div class="team__item-author">
                    <h4><a href="/EventsDetails">{{$event->title}}</a> </h4>
                    <p>{{$event->user->name}}</p>
                </div>
                <p style="height: 100px; overflow:hidden" >{{$event->description}}</p>
                    <a href="EventsDetails/{{$event->id}}" class="default-btn move-right">
                        <span>Details <svg class="svg-inline--fa fa-arrow-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M438.6 278.6l-160 160C272.4 444.9 264.2 448 256 448s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L338.8 288H32C14.33 288 .0016 273.7 .0016 256S14.33 224 32 224h306.8l-105.4-105.4c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160C451.1 245.9 451.1 266.1 438.6 278.6z">
                                </path>
                            </svg>
                        </span>
                    </a>
            </div>
        </div>
    </div>
</div>
@endforeach