@extends('panel::layouts.app')

@section('title', __('panel/menu.locale'))

@section('content')
<div class="card h-min-600">
  <div class="card-header">
    <h5 class="card-title mb-0">{{ __('panel/menu.locale') }}</h5>
  </div>
  <div class="card-body">
    <form class="needs-validation mt-3" novalidate action="{{ $locale->id ? panel_route('locales.update', [$locale->id]) : panel_route('locales.store') }}" method="POST">
      @csrf
      @method($locale->id ? 'PUT' : 'POST')

      <x-common-form-input title="Name" name="name" :value="old('name', $locale->name ?? '')" required placeholder="Name" />
      <x-common-form-input title="Code" name="code" :value="old('code', $locale->code ?? '')" required placeholder="Code" />
      <x-common-form-image title="Image" name="image" :value="old('image', $locale->image ?? '')" placeholder="Image" />
      <x-common-form-input title="Position" name="position" :value="old('position', $locale->slug ?? '')" required placeholder="Position" />
      <x-common-form-input title="Active" name="active" :value="old('active', $locale->active ?? '')" placeholder="Active" />

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
