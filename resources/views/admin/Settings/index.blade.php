@extends('adminlte::page')
@section('content')

@if (session()->has('success'))
<div class="alert alert-success">{{ session()->get('success') }}</div>
@endif

@if (session()->has('updated'))
<div class="alert alert-success">
    {{ session()->get('updated') }}
</div>
@endif
<a href="{{ route('settings.create') }}" class="btn btn-primary"><i class="fas fa-plus-square"></i>
</a>

<table class="table">
<thead>
    <th>id</th>
    <th>Name</th>
    <th>Description</th>
    <th>Address</th>
    <th>Phone</th>
    <th>Email</th>
    <th>Logo</th>
    <th>Facebook</th>
    <th>Twitter</th>
    <th>Instagram</th>
    <th>Youtube</th>
    <th>Delete</th>
    <th>Update</th>
    {{-- <th>Show</th> --}}
</thead>
<tbody>
    <tr>
        @foreach ($settings as $setting)
            <td>{{ $setting->id }}</td>
            <td>{{ $setting->name }}</td>
            <td>{{ $setting->description }}</td>
            <td>{{ $setting->address }}</td>
            <td><a href="tel:{{ $setting->phone }}"><i class="fas fa-phone-alt"></i></a></td>
            <td><a href="mailto:{{ $setting->email }}"><i class="fas fa-envelope"></i></a></td>
            <td><img width="100px" src="
                {{-- file exist --}}
                @php
                $imagePath = asset('assets/images/settings/' . $setting->logo);
                @endphp
                 {{-- @dd(!file_exists(public_path($imagePath))) --}}
                    {{-- @dd(empty($doctorData->image)) --}}
                @if (!file_exists(public_path($imagePath)) && !empty($setting->logo))
                {{ $imagePath }}
                @else
                {{ asset('assets/images/settings/defaultSetting.png') }}
                @endif
                " alt=""></td>
            <td><a style="font-size: 30px; color:#0863F7" target="_blank" href="{{ $setting->facebook }}"><i class="fab fa-facebook-square"></a></td>
            <td> <a style="font-size: 30px; color: #029EEC;" target="_blank" href="{{ $setting->twitter }}"><i class="fab fa-twitter"></i></a></td>
            <td><a style="font-size: 30px; color: #CD219B;" target="_blank" href="{{ $setting->instagram }}"><i class="fab fa-instagram"></a></td>
            <td><a style="font-size: 30px ; color: red;" target="_blank" href="{{ $setting->youtube }}"><i class="fab fa-youtube"></a></td>
            
            <td class="d-flex">
                <form action="{{ route('settings.destroy', $setting->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="delete-setting btn btn-danger" type="submit"><i
                            class="fas fa-minus-circle"></i></button>
                </form>

            </td>
            <td><a href="{{ route('settings.edit', $setting->id) }}" class="btn btn-warning"><i
                        class="fas fa-edit"></i></a></td>
            
    </tr>
    @endforeach

</tbody>
</table>


<div class="row">
<div class="col-12 mt-5">
    @if ($settings->hasPages())
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <li class="page-item {{ $settings->currentPage() == 1 ? 'disabled' : '' }}">
                    <a class="page-link" href="{{ $settings->previousPageUrl() }}" aria-label="Previous">
                        <span class="fa fa-angle-double-left" aria-hidden="true"></span>
                        <span class="sr-only"> {{ 'lang.Previous' }} </span>
                    </a>
                </li>
                @foreach ($settings->getUrlRange(1, $settings->lastPage()) as $pageLink)
                    @php
                        //fuck you php iam mohamed seabeai
                        $pageString = strstr($pageLink, 'page=', false);
                        $rev = strrev($pageString);
                        $pageNum = strstr($rev, '=', true);
                        $pageNum = strrev($pageNum);
                    @endphp
                    <li class="page-item {{ substr($pageLink, -1) == $settings->currentPage() ? 'active' : '' }}">
                        <a class="page-link" href="{{ $pageLink }}">{{ $pageNum }}
                        </a>
                    </li>
                @endforeach
                <li class="page-item {{ $settings->currentPage() == $settings->lastPage() ? 'disabled' : '' }}">
                    <a class="page-link" href="{{ $settings->nextPageUrl() }}" aria-label="Next">
                        <span class="fa fa-angle-double-right" aria-hidden="true"></span>
                        <span class="sr-only"> {{ 'lang.Next' }} </span>
                    </a>
                </li>
            </ul>
        </nav>
    @endif

</div>
</div>


@section('js')
<script>
document.querySelectorAll('.delete-setting').forEach(btn => {
    btn.addEventListener('click', function(e) {
        const Action = confirm('are you sure you want to delete');
        if (!Action) e.preventDefault();
    })
})
</script>

@endsection

@endsection