<div class="col-12 col-lg-4">
    <div class="card w-100">
        <div class="card-body">
            <div class="position-relative">
                <div class="position-absolute top-100 start-50 translate-middle">
                    <img src="{{ uploads('logos/' . $user->image) }}" width="100" height="100"
                        class="rounded-circle raised p-1 bg-white" alt="">
                </div>
            </div>
            <div class="mb-4 mt-5 pt-4 text-center">
                <h4 class="mb-1"> {{ $user->first_name . ' ' . $user->last_name }} <a
                        href="{{ route('user.profile.edit') }}"><i class="fs-6 lni lni-pencil"></i></a></h4>
            </div>
            <div class="d-flex align-items-center justify-content-around">
                <div class="align-items-center d-flex flex-column gap-2">
                    <h4 class="mb-0">{{ $imagePixels->count() }}</h4>
                    <p class="mb-0">Logos</p>
                </div>
                <div class="align-items-center d-flex flex-column gap-2">
                    <h4 class="mb-0">{{ $totalPixels }}</h4>
                    <p class="mb-0">Purchased Pixels</p>
                </div>
                <div class="align-items-center d-flex flex-column gap-2">
                    <h4 class="mb-0">{{ $totalViews }}</h4>
                    <p class="mb-0">Total Views</p>
                </div>
            </div>

        </div>

        <ul class="list-group list-group-flush">
            <li class="list-group-item border-top">
                <b>First Name</b>
                <br>
                {{ $user->first_name }}
            </li>
            <li class="list-group-item">
                <b>Last Name</b>
                <br>
                {{ $user->last_name }}
            </li>
            <li class="list-group-item">
                <b>Company Name</b>
                <br>
                {{ $user->company_name }} <br>
            </li>
            <li class="list-group-item">
                <b>Email</b>
                <br>
                {{ $user->email }} <br>
            </li>
            <li class="list-group-item">
                <b>Phone</b>
                <br>
                {{ $user->phone }} <br>
            </li>
        </ul>


    </div>
</div>
