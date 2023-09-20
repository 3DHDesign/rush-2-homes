<div class="row">

    @foreach ($fav_properties as $property)
        <div class="col-lg-4 col-md-6 d-flex">
            <div class="agent-card agency card flex-fill">
                <div class="agent-img">
                    <a href="{{ route('property.inner', ['slug' => $property->slug]) }}">
                        <img class="img-fluid" alt="{{ $property->title }}"
                            src="{{ asset('storage/' . $property->gallery[0]) }}">
                    </a>
                </div>
                <div class="agent-content">
                    <div class="agency-user">
                        <div class="agency-user-info">
                            <h6>
                                <a
                                    href="{{ route('property.inner', ['slug' => $property->slug]) }}">{{ $property->title }}</a>
                            </h6>
                            <p><i class="bx bx-map"></i>{{ $property->address }}</p>
                        </div>
                    </div>
                </div>
                <a class="btn btn-danger" wire:click.prevent="removeFav({{ $property->id }})"
                    style="margin-top: 20px;"><i class="feather-user-minus"></i> &nbsp;
                    Remove</a>
            </div>
        </div>
    @endforeach


</div>
