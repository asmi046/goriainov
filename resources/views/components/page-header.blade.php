<section class="page-header" style="background-image: url('{{ $banner }}');">
  <div class="page-header__overlay"></div>
  <div class="container">
    <h1 class="page-header__title">{{ $title ?? '' }}</h1>
    <x-breadcrumbs.main :title="$title"></x-breadcrumbs.main>
  </div>
</section>
