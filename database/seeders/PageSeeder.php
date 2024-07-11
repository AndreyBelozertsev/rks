<?php

namespace Database\Seeders;

use Domain\Page\Models\Page;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'title' => 'Главная',
                'slug' => '/',
                'template' => 'home',
                'status' => 1,
                'sort' => 100,
            ],
            [
                'title' => 'Контакты',
                'slug' => 'contact',
                'template' => 'contact',
                'status' => 1,
                'sort' => 200,
            ],
            [
                'title' => 'Отзывы',
                'slug' => 'feedback',
                'content' => '<p>Мы вкладываем огромное значение в качество нашего сервиса.</p>
                    <p>Отзывы клиентов помогают нам понять, что мы делаем правильно, а также выявить возможности для улучшения и роста качества обслуживания.</p>
                    <p>Спасибо, что выбрали нас. Мы ценим Ваше доверие и всегда остаемся на связи!</p>
                    <br>
                    <p>С уважением, команда компании Ракурс</p>',
                'template' => 'feedback',
                'status' => 1,
                'sort' => 300,
            ],
            [
                'title' => 'Пройти опрос',
                'slug' => 'get-feedback',
                'content' => '<p>Жаль, что Вы собираетесь покинуть наш сайт!
                            Будем Вам очень признательны за обратную связь по работе сайта.</p>
                            <script src="https://yastatic.net/s3/frontend/forms/_/embed.js"></script>
                            <iframe src="https://forms.yandex.ru/u/6502de09e010db373df18a72/?iframe=1&quot; frameborder="0" name="ya-form-6502de09e010db373df18a72" width="100%"></iframe>',
                'template' => 'get-feedback',
                'status' => 1,
                'sort' =>400,
            ],
            [
                'title' => 'Политика конфиденциальности',
                'slug' => 'policy',
                'content' => '<h3>1. ОБЩИЕ ПОЛОЖЕНИЯ</h3>
                        <p>Настоящая Политика разработана в соответствии со следующими положениями:<p>
                        <ul>
                            <li>Конституции РФ от 12.12.1993г.;</li>
                            <li>Трудового кодекса РФ;</li>
                            <li>Федерального закона от 27.07.2006 № 152-ФЗ «О персональных данных»;</li>
                            <li>Федерального закона от 27.07.2006 №149-ФЗ «Об информации, информационных технологиях и защите информации»;</li>
                            <li>Постановлением Правительства РФ от 01.11.2012 № 1119 «Об утверждении требований к защите персональных данных при их обработке в информационных системах персональных данных»;</li>
                            <li>Постановлением Правительства Российской Федерации от 15.09.2008 № 687 «Об утверждении Положения об особенностях обработки персональных данных, осуществляемой без использования средств автоматизации»;</li>
                            <li>иных нормативно-правовых актов, регулирующих вопросы защиты персональных данных.</li>
                        </ul>
                        <p>Настоящая Политика определяет основные вопросы, связанные с обработкой персональных данных в ООО «РАКУРС» (далее – Оператор) с использованием средств автоматизации, в том числе в информационно-телекоммуникационных сетях, или без использования таких средств.
                        Персональные данные являются конфиденциальной, охраняемой информацией и на них распространяются все требования, установленные внутренними документами Оператора к защите конфиденциальной информации.</p>
                        <h3>2. ТЕРМИНЫ И СОСТАВ ПЕРСОНАЛЬНЫХ ДАННЫХ</h3>
                        <p>2.1. Оператор – юридическое лицо, самостоятельно или совместно с другими лицами организующие и (или) осуществляющие обработку персональных данных, а также определяющие цели обработки персональных данных, состав персональных данных, подлежащих обработке, действия (операции), совершаемые с персональными данными.<p>
                        <p>2.2. Обработка персональных данных – любое действие (операция) или совокупность действий (операций), совершаемых с использованием средств автоматизации или без использования таких средств с персональными данными, включая сбор, запись, систематизацию, накопление, хранение, уточнение (обновление, изменение), извлечение, использование, передачу (распространение, предоставление, доступ), обезличивание, блокирование, удаление, уничтожение персональных данных.<p>
                        <p>2.3. Субъект персональных данных – заказчики услуг Оператора – физические лица, в том числе потенциальные заказчики, представители заказчиков, пользователи сайта Оператора.<p>
                        <p>2.4. Персональные данные (ПД) – любая информация, в том числе, если применимо, составляющая врачебную тайну, относящаяся к прямо или косвенно определенному или определяемому субъекту персональных данных.<p>
                        <p> 2.5. Оператор обрабатывает персональные данные следующих категорий субъектов персональных данных:<p>
                        <ul>
                            <li>персональные данные работников Оператора – информация, необходимая Оператору в связи с трудовыми отношениями;</li>
                            <li>персональные данные заказчика, клиента (потенциального клиента), партнера, контрагента (потенциального контрагента), а также персональные данные руководителя, участника (акционера) или сотрудника юридического лица, являющегося клиентом или контрагентом (потенциальным клиентом, партнером, контрагентом) Оператора – информация, необходимая Оператору для выполнения своих обязательств в рамках договорных отношений с пациентом, клиентом (контрагентом).</li>
                        </ul>
                        <h3>3. ЦЕЛИ И СЛУЧАИ ОБРАБОТКИ ПЕРСОНАЛЬНЫХ ДАННЫХ</h3>
                        <p>3.1. Целями обработки персональных данных являются:<p>
                        <ul>
                            <li>организация кадрового учета, ведение кадрового делопроизводства, содействие работникам в трудоустройстве, обучении и продвижении по службе, исполнение налогового законодательства РФ в связи с исчислением и уплатой НДФЛ, а также пенсионного законодательства РФ при формировании и представлении персонифицированных данных о каждом получателе доходов, учитываемых при начислении страховых взносов на обязательное пенсионное страхование и обеспечение, заполнение первичной статистической документации;</li>
                            <li>заключение, исполнение и прекращение гражданско-правовых договоров;</li>
                            <li>закрепление принципов защиты персональных данных субъектов персональных данных Оператора, обеспечение их прав и свобод, установление правил обработки персональных данных и их защиты.</li>
                        </ul>
                        <p>3.2. Обработка персональных данных Оператором допускается в случаях:</p>
                        <ul>
                            <li>если обработка персональных данных осуществляется с согласия субъекта персональных данных;</li>
                            <li>если обработка персональных данных необходима для исполнения договора, стороной которого либо выгодоприобретателем или поручителем по которому является субъект персональных данных, а также для
                                заключения договора по инициативе субъекта персональных данных или договора, по которому субъект персональных данных будет являться выгодоприобретателем или поручителем;</li>
                            <li>если обработка персональных данных необходима для защиты жизни, здоровья или иных жизненно важных интересов субъекта персональных данных, если получение согласия субъекта персональных данных невозможно;</li>
                            <li>если обработка персональных данных необходима для осуществления прав и законных интересов Оператора или третьих лиц либо для достижения общественно значимых целей при условии, что при этом не нарушаются права и свободы субъекта персональных данных;</li>
                            <li>если обработка персональных данных необходима для осуществления научной, литературной или иной творческой деятельности при условии, что при этом не нарушаются права и законные интересы субъекта персональных данных;</li>
                            <li>если обработка персональных данных осуществляется в исследовательских, статистических или иных целях при условии обязательного обезличивания персональных данных;</li>
                            <li>если осуществляется обработка персональных данных, доступ неограниченного круга лиц к которым предоставлен субъектом персональных данных либо по его просьбе;</li>
                            <li>если осуществляется обработка персональных данных, подлежащих опубликованию или обязательному раскрытию в соответствии с законом.</li>
                        </ul>
                        <p>3.3. Обработка персональных данных в ООО «РАКУРС» осуществляется в следующих целях:</p>
                        <ul>
                            <li>для целей заключения и исполнения договора, стороной которого либо выгодоприобретателем или поручителем по которому является субъект персональных данных, обработка персональных данных осуществляется на основании Федерального закона от 27.07. 2006 № 152-ФЗ «О персональных данных».</li>
                            <li>для иных целей обработка персональных данных осуществляется на основании согласия субъекта персональных данных при условии получения согласия на конкретные цели обработки персональных данных.</li>
                        </ul>
                        <p>3.4. В отдельных случаях, Оператор вправе осуществлять обработку персональных данных субъекта персональных данных без получения его согласия, если такие действия необходимы для защиты жизни, здоровья или иных жизненно важных интересов субъекта персональных данных.</p>
                        <p>3.5. Оператор не осуществляет обработку иных персональных данных, которые не отвечают целям такой обработки, а также законным правам и интересам субъекта персональных данных.</p>
                        <p>3.6. Оператор самостоятельно и за свой счет обеспечивает организационно-технические мероприятия, а также принимает меры по обеспечению защиты персональных данных субъектов персональных данных.<p/>
                        <h3>4. ОСНОВНЫЕ ПРИНЦИПЫ ОБРАБОТКИ ПЕРСОНАЛЬНЫХ ДАННЫХ</h3>
                        <p>4.1. Обработка персональных данных возможна только в соответствии с целями, определившими их получение.</p>
                        <p>4.2. Право доступа для обработки персональных данных имеют сотрудники Оператора в соответствии с возложенными на них функциональными обязанностями.</p>
                        <p>4.3. При обработке персональных данных обеспечивается точность персональных данных, их достаточность, а в необходимых случаях и актуальность по отношению к заявленным целям их обработки.</p>
                        <p>4.4. Хранение персональных данных осуществляется в форме, позволяющей определить субъекта персональных данных, не дольше, чем этого требуют цели обработки персональных данных, если срок хранения персональных данных не установлен федеральным законом, договором, стороной которого, выгодоприобретателем или поручителем по которому является субъект персональных данных.</p>
                        <p>4.5. Обрабатываемые персональные данные уничтожаются или обезличиваются по достижении целей обработки или в случае утраты необходимости в достижении этих целей, если иное не предусмотрено федеральным законом.</p>
                        <p>4.6. Сроки хранения персональных данных определяются в соответствии со сроком действия гражданско-правовых отношений между субъектом персональных данных и Оператором, сроком исковой давности, сроками хранения документов на бумажных носителях и документов в электронных базах данных, иными требованиями законодательства РФ, а также сроком действия согласия субъекта на обработку его персональных данных.</p>
                        <p>4.7. Оператор осуществляет обработку персональных данных субъектов персональных данных на основе следующих принципов:</p>
                        <ul>
                            <li>законности целей и способов обработки персональных данных и добросовестности;</li>
                            <li>соответствия целей обработки персональных данных целям, заранее определенным и заявленным при сборе персональных данных, а также полномочиям Оператора;</li>
                            <li>соответствия объема и характера обрабатываемых персональных данных, способов обработки персональных данных целям обработки персональных данных;</li>
                            <li>достоверности персональных данных, их достаточности для целей обработки, недопустимости обработки персональных данных, избыточных по отношению к целям, заявленным при сборе персональных данных.</li>
                        </ul>
                        <h3>5. ПОРЯДОК ПОЛУЧЕНИЯ ПЕРСОНАЛЬНЫХ ДАННЫХ СУБЪЕКТА ПЕРСОНАЛЬНЫХ ДАННЫХ</h3>
                        <p>5.1. Субъект персональных данных предоставляет персональные данные, а Оператор осуществляет их дальнейшую обработку на основании согласия за исключением случаев, предусмотренных законодательством.<p>
                        <p>5.2. Оператор гарантирует, что субъект персональных данных принимает решение о предоставлении его персональных данных и дает согласие на их обработку свободно, по своей воле и в своем интересе. Обязанность предоставить доказательство получения согласия субъекта персональных данных на обработку его персональных данных или доказательство наличия оснований, указанных в Федеральном законе от 27.07.2006 № 152-ФЗ «О персональных данных», возлагается на Оператора.<p>
                        <h3>6. ОБРАБОТКА ПЕРСОНАЛЬНЫХ ДАННЫХ</h3>
                        <p>6.1. Порядок обработки персональных данных субъектов определяется должностными инструкциями Оператора, приказами и иными локальными нормативными актами.<p>
                        <p>6.2. Обработка Оператором персональных данных субъектов персональных данных осуществляется автоматизированным и неавтоматизированным способами (смешанный тип).<p>
                        <p>6.3. Обработка персональных данных – общие положения:<p>
                        <ul>
                            <li>6.3.1. Правом обработки персональных данных субъекта наделяются работники Оператора, допущенные к работе с теми или иными персональными данными, а также третьи лица, которые имеют доступ к персональным данным субъекта в силу договорных отношений с Оператором при условии соблюдения условия о конфиденциальности персональных данных.</li>
                            <li>6.3.2. Работнику Оператора предоставляется право использовать только те персональные данные, использование которых необходимо для реализации, закрепленной за ним трудовой функции, и возложенных на него трудовых обязанностей.</li>
                            <li>6.3.3. Перечень лиц, имеющих доступ к тем или иным персональным данным, устанавливается руководителем Оператора, путем подписания соответствующего приказа, если иное не вытекает из другого локального нормативного акта, утвержденного Оператором в установленном порядке.</li>
                        </ul>
                        <h3>7. МЕРЫ ПО ОБЕСПЕЧЕНИЮ БЕЗОПАСНОСТИ ПЕРСОНАЛЬНЫХ ДАННЫХ</h3>
                        <p>7.1. Защита персональных данных – комплекс мер, направленных на:<p>
                        <ul>
                            <li>обеспечение режима конфиденциальности информации в отношении персональных данных;</li>
                            <li>защиту персональных данных от неправомерного доступа, уничтожения, модифицирования, блокирования, копирования, предоставления, распространения, а также от иных неправомерных действий;</li>
                            <li>обеспечение законных прав и интересов субъектов персональных данных.</li>
                        </ul>
                        <p>7.2. Защита персональных данных субъектов персональных данных осуществляется силами всех сотрудников Оператора на основании комплекса утвержденных документов и мер, регламентирующих правила обработки персональных данных, а также может осуществляться путем привлечения специализированных организаций.</p>
                        <p>7.3. Защита персональных данных в информационных системах персональных данных, используемых Оператором, осуществляется в соответствии с данной Политикой, должностными инструкциями и иными локальными нормативными актами, принятыми Оператором.</p>
                        <p>7.4. Обеспечение безопасности персональных данных достигается, в частности:</p>
                        <ul>
                            <li>применением организационных и технических мер по обеспечению безопасности персональных данных при их обработке в информационных системах персональных данных, необходимых для выполнения требований к защите персональных данных, исполнение которых обеспечивает установленные Правительством РФ уровни защищенности персональных данных;</li>
                            <li>обнаружением фактов несанкционированного доступа к персональным данным и принятием необходимых мер;</li>
                            <li>установлением правил доступа к персональным данным, обрабатываемым в информационной системе персональных данных;</li>
                            <li>контролем за принимаемыми мерами по обеспечению безопасности персональных данных и уровня защищенности информационной системы персональных данных.</li>
                        </ul>
                        <h3>8. ПРАВА СУБЪЕКТА ПЕРСОНАЛЬНЫХ ДАННЫХ</h3>
                        <p>8.1. Субъект персональных данных имеет право на получение информации, касающейся обработки его персональных данных, в том числе содержащей:</p>
                        <ul>
                            <li>подтверждение факта обработки персональных данных Оператором;</li>
                            <li>правовые основания и цели обработки персональных данных;</li>
                            <li>цели и применяемые Оператором способы обработки персональных данных;</li>
                            <li>наименование и место нахождения Оператора, сведения о лицах (за исключением работников Оператора), которые имеют доступ к персональным данным или которым могут быть раскрыты такие данные на основании договора с Оператором или на основании законодательства;</li>
                            <li>обрабатываемые персональные данные, относящиеся к соответствующему субъекту персональных данных, источник их получения, если иной порядок представления таких данных не предусмотрен законодательством;</li>
                            <li>сроки обработки персональных данных, в том числе сроки их хранения;</li>
                            <li>порядок осуществления субъектом персональных данных прав, предусмотренных действующим законодательством;</li>
                            <li>информацию об осуществленной или о предполагаемой трансграничной передаче персональных данных;</li>
                            <li>наименование или фамилию, имя, отчество и адрес лиц, осуществляющих обработку персональных данных по поручению Оператора, если обработка поручена или будет поручена таким лицам;</li>
                            <li>иные сведения, предусмотренные законодательством РФ.</li>
                        </ul>
                        <p>8.2. Сведения, указанные в п. 8.1. настоящей Политики, должны быть предоставлены субъектам персональных данных Оператором в доступной форме, и в них не должны содержаться персональные данные, относящиеся к другим субъектам персональных данных, за исключением случаев, если имеются законные основания для раскрытия таких персональных данных.</p>
                        <p>8.3. Сведения, указанные п. 8.1. настоящей Политики, предоставляются субъекту персональных данных или его представителю Оператором при обращении либо при получении Запроса субъекта персональных данных или его представителя в течение 30 (тридцати) календарных дней с момента получения соответствующего запроса Оператором.</p>
                        <p>8.4. Запрос, указанный в п. 8.3. настоящей Политики, должен содержать номер основного документа, удостоверяющего личность субъекта персональных данных или его представителя, сведения о дате выдачи указанного документа и выдавшем его органе, сведения, подтверждающие участие субъекта персональных данных в отношениях с Оператором (номер договора, дата заключения договора и др.), либо сведения, иным образом подтверждающие факт обработки персональных данных Оператором, подпись субъекта персональных данных или его представителя. Запрос может быть направлен в форме электронного документа и подписан электронной подписью в соответствии с законодательством Российской Федерации.</p>
                        <p>8.5. Субъект персональных данных вправе требовать от Оператора уточнения его персональных данных, их блокирования или уничтожения в случае, если такие данные являются неполными, устаревшими, неточными, незаконно полученными или не являются необходимыми для заявленной цели обработки, а также принимать предусмотренные законом меры по защите своих прав.</p>
                        <p>8.6. На свободный бесплатный доступ к своим персональным данным, включая право на получение копий любой записи, содержащей персональные данные, за исключением случаев, предусмотренных законодательством РФ.</p>
                        <p>8.7. В отдельных случаях, предусмотренных законодательством, право субъекта персональных данных на доступ к его персональным данным может быть ограничено.</p>
                        <p>8.8. Если субъект персональных данных считает, что Оператор осуществляет обработку его персональных данных с нарушением требований законодательства или иным образом нарушает его права и свободы, субъект</p>
                        персональных данных вправе обжаловать действия или бездействие Оператора в уполномоченный орган по защите прав субъектов персональных данных или в судебном порядке.</p>
                        <p>8.9. Субъект персональных данных имеет право на защиту своих прав и законных интересов, в том числе на возмещение убытков и (или) компенсацию морального вреда в судебном порядке.</p>
                        <h3>9. ОБЯЗАННОСТИ ОПЕРАТОРА</h3>
                        <p>9.1. Оператор обязуется:<p>
                        <ul>
                            <li>9.1.1. Принимать необходимые и достаточные правовые, организационные и технические меры для защиты персональных данных от неправомерного или случайного доступа к ним, уничтожения, изменения, блокирования, копирования, предоставления, распространения персональных данных, а также от иных неправомерных действий в отношении персональных данных.</li>
                            <li>9.1.2. Осуществлять мероприятия по организационной и технической защите персональных данных в соответствии с требованиями законодательства РФ по вопросам обработки персональных данных.</li>
                            <li>9.1.3. В целях обеспечения защиты персональных данных проводить оценку вреда, который может быть причинен субъектам персональных данных в случае нарушения безопасности их персональных данных, а также определять актуальные угрозы безопасности персональных данных при их обработке в информационных системах персональных данных.</li>
                            <li>9.1.4. Уведомлять пользователей об использовании Администрацией сайта указанных, при регистрации на Сайте и(или) его сервисах, контактного номера телефона и e-mail адреса для направления ему информации рекламного характера об услугах (товарах), посредством настоящего Пользовательского соглашения. Пользователи Сайта могут выразить свой отказ от получения: e-mail рассылок, путем перехода по ссылке «Отписаться от рассылки», расположенной в конце электронного письма; SMS рассылок, путем обращения к оператору мобильной связи и/или Администрации сайта, используя сервис «Оставить заявку».</li>
                            <li>9.1.5. При выявлении актуальных угроз применять необходимые и достаточные правовые, организационные и технические меры по обеспечению безопасности персональных данных, включающие в себя:
                                <ul>
                                    <li>определение угроз безопасности информации, содержащей персональные данные, при ее обработке;</li>
                                    <li>применение организационных и технических мер по обеспечению безопасности информации, содержащей персональные данные, при ее обработке;</li>
                                    <li>оценку эффективности принимаемых мер до ввода в эксплуатацию информационной системы персональных данных;</li>
                                    <li>учет машинных носителей информации, содержащей персональные данные;</li>
                                    <li>обнаружение фактов несанкционированного доступа к информации, содержащей персональные данные, и принятие мер;</li>
                                    <li>восстановление персональных данных, модифицированных или уничтоженных вследствие несанкционированного доступа к ним;</li>
                                    <li>установление правил доступа к информации, содержащей персональные данные, обеспечение регистрации и учета всех действий, совершаемых с информацией, содержащей персональные данные, в информационной системе персональных данных;</li>
                                    <li>контроль за принимаемыми мерами.</li>
                                </ul>
                            </li>
                        </ul>
                        <h3>10. ОБЯЗАННОСТИ И ОТВЕТСТВЕННОСТЬ СОТРУДНИКОВ ОПЕРАТОРА</h3>
                        <p>10.1. Сотрудники Оператора, допущенные к обработке персональных данных, обязаны:</p>
                        <ul>
                            <li>знать и неукоснительно выполнять требования настоящей Политики;</li>
                            <li>обрабатывать персональные данные только в рамках выполнения своих должностных обязанностей;</li>
                            <li>не разглашать персональные данные, полученные в результате выполнения своих должностных обязанностей, а также ставшие им известными по роду своей деятельности;</li>
                            <li>пресекать действия третьих лиц, которые могут привести к разглашению (уничтожению, искажению) персональных данных;</li>
                            <li>выявлять факты разглашения (уничтожения, искажения) персональных данных и информировать об этом непосредственного руководителя;</li>
                            <li>хранить тайну о сведениях, содержащих персональные данные в соответствии с локальными актами Оператора.</li>
                        </ul>
                        <p>10.2. Сотрудникам Оператора, допущенным к обработке персональных данных, запрещается несанкционированное и нерегламентированное копирование персональных данных на бумажные носители информации и на любые электронные носители информации, не предназначенные для хранения персональных данных.</p>
                        <p>10.3. Каждый новый работник Оператора, непосредственно осуществляющий обработку персональных данных, подлежит ознакомлению с требованиями законодательства РФ по обработке и обеспечению безопасности персональных данных, с настоящей Политикой и другими локальными актами по вопросам обработки и обеспечения безопасности персональных данных и обязуется их соблюдать.</p>',
                'template' => 'policy',
                'status' => 1,
                'sort' =>500,
            ],
            [
                'title' => 'Реквизиты ИП Воронцов И.А.',
                'slug' => 'requisites-ip',
                'content' => '
                    <p><b>ИП Воронцов Иван Андреевич</b></p>
                    <p>Адрес: 295051, Республика Крым, г. Симферополь, ул. Маяковского, 14л оф. 311</p>
                    <p>ИНН: 910610874240</p>
                    <p>ОГРНИП: 318911200072411</p>
                    <p>р/с: 40802810342650102102</p>
                    <p>Банк: РНКБ Банк (ПАО) г. Симферополь</p>
                    <p>БИК: 043510607</p>
                    <p>к/с: 30101810335100000607</p>',
                'template' => 'default',
                'status' => 1,
                'sort' =>600,
            ]
        ];

        foreach($items as $item){
            Page::updateOrCreate(
                $item
            );
        }
    }
}
