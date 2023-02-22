@push('block.content')

<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon" style="background-color: #00c0ef!important;">
                    <i class="fas fa-address-book text-white"></i>
                </span>  
                <div class="info-box-content">
                    <span class="info-box-text">Заявок</span> 
                    <span class="info-box-number">{{ $customers }}</span>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon" style="background-color: #00c0ef!important;">
                    <i class="fas fa-address-book text-white"></i>
                </span>  
                <div class="info-box-content">
                    <span class="info-box-text">Услуг</span> 
                    <span class="info-box-number">{{ $services }}</span>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon" style="background-color: #00c0ef!important;">
                    <i class="fas fa-address-book text-white"></i>
                </span>  
                <div class="info-box-content">
                    <span class="info-box-text">Кейсов</span> 
                    <span class="info-box-number">{{ $portfolios }}</span>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon" style="background-color: #00c0ef!important;">
                    <i class="fas fa-address-book text-white"></i>
                </span>  
                <div class="info-box-content">
                    <span class="info-box-text">Публикаций</span> 
                    <span class="info-box-number">{{ $posts }}</span>
                </div>
            </div>
        </div>
    </div>
</div>

@endpush