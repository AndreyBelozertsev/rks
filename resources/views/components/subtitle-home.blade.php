@props(['title', 'number'])

<div {{ $attributes->merge(['class' => 'relative']) }}>
	<h2 class="pb-8 lg:pl-4 lg:pt-[96px] lg:text-4xl relative z-[1]">{!! $title !!}</h2>
	<span class="hidden lg:inline absolute top-0 text-brandGrey-100 text-[180px] leading-none ff-dela-gothic-one z-0">{{ $number }}</span>
</div>