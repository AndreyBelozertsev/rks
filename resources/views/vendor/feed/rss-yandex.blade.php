<rss xmlns:yandex="http://news.yandex.ru"
     xmlns:media="http://search.yahoo.com/mrss/"
     xmlns:turbo="http://turbo.yandex.ru"
     version="2.0">
    <channel>
        <!-- Информация о сайте-источнике -->
        <title>{!! \Spatie\Feed\Helpers\Cdata::out($meta['title'] ) !!}</title>
        <link>{!! \Spatie\Feed\Helpers\Cdata::out(url($meta['link']) ) !!}</link>
        <description>{!! \Spatie\Feed\Helpers\Cdata::out($meta['description'] ) !!}</description>
        <language>{{ $meta['language'] }}</language>
        @foreach($items as $item)
            <item turbo="true">
                <!-- Информация о странице -->
                <turbo:extendedHtml>true</turbo:extendedHtml>
                <link>{{ url($item->link) }}</link>
                @foreach($item->category as $category)
                    <category>{{ $category }}</category>
                @endforeach
                <turbo:source></turbo:source>
                <turbo:topic></turbo:topic>
                <pubDate>{{ $item->timestamp() }}</pubDate>
                <author>{!! \Spatie\Feed\Helpers\Cdata::out($item->authorName.(empty($item->authorEmail)?'':' <'.$item->authorEmail.'>')) !!}</author>
                <yandex:related></yandex:related>
                <turbo:content>
                    <header>
                        <h1>{!! \Spatie\Feed\Helpers\Cdata::out($item->title) !!}</h1>
                        @if($item->thumbnail)
                            <figure>
                                <img src="{{ $item->thumbnail }}">
                            </figure>
                        @endif
                    </header>
                    {!! \Spatie\Feed\Helpers\Cdata::out($item->summary) !!}   
                </turbo:content>
            </item>
        @endforeach
    </channel>
</rss>