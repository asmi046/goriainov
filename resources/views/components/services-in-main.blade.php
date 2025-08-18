<div class="services">
    @foreach ($services as $item)
        <x-cards.service :item="$item"></x-cards.service>
    @endforeach
</div>
