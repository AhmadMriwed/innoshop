@extends('panel::layouts.app')

@section('title', __('panel/menu.country'))

@section('content')
<div class="card h-min-600">
  <div class="card-header">
    <h5 class="card-title mb-0">{{ __('panel/menu.countries') }}</h5>
  </div>
  <div class="card-body">
    <form class="needs-validation mt-3" novalidate action="{{ $country->id ? panel_route('countries.update', [$country->id]) : panel_route('countries.store') }}" method="POST">
      @csrf
      @method($country->id ? 'PUT' : 'POST')

      <x-common-form-input title="الاسم" name="name" :value="old('name', $country->name ?? '')" required placeholder="الاسم" />
      <x-common-form-input title="الرمز" name="code" :value="old('code', $country->code ?? '')" required placeholder="الرمز" />
      <x-common-form-image title="الصورة" name="image" :value="old('image', $country->image ?? '')" placeholder="image" />
      <x-common-form-input title="فرز" name="position" :value="old('position', $country->slug ?? '')" required placeholder="فرز" />
      <x-common-form-input title="تمكين" name="active" :value="old('active', $country->active ?? '')" placeholder="تمكين" />

      <div class="form-row mt-5 d-flex">
        <div class="wp-200 pe-2"></div>
        <button class="btn btn-primary" type="submit">Submit form</button>
      </div>
    </form>
  </div>
</div>
@endsection

@push('footer')
  <script>
  </script>
@endpush