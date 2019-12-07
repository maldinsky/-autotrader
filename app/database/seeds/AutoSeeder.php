<?php

use App\Entity\AutoBrand;
use Illuminate\Database\Seeder;

class AutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $autoBrands = [
            '1' => 'Acura',
            '2' => 'Alfa Romeo',
            '3' => 'Audi',
            '4' => 'Bentley',
            '5' => 'BMW',
            '6' => 'Cadillac',
            '7' => 'Chery',
            '8' => 'Chevrolet',
            '9' => 'Chrysler',
            '10' => 'Citroen',
            '11' => 'Daewoo',
            '12' => 'Datsun',
            '13' => 'Fiat',
            '14' => 'Ford',
            '15' => 'Great Wall',
            '16' => 'Honda',
            '17' => 'Hummer',
            '18' => 'Hyundai',
            '19' => 'Infiniti',
            '20' => 'Jaguar',
            '21' => 'Jeep',
            '22' => 'Kia',
            '23' => 'Land Rover',
            '24' => 'Lexus',
            '25' => 'Mazda',
            '26' => 'Mercedes-Benz',
            '27' => 'Mini',
            '28' => 'Mitsubishi',
            '29' => 'Nissan',
            '30' => 'Opel',
            '31' => 'Peugeot',
            '32' => 'Porsche',
            '33' => 'Renault',
            '34' => 'Saab',
            '35' => 'SEAT',
            '36' => 'Skoda',
            '37' => 'SsangYong',
            '38' => 'Subaru',
            '39' => 'Suzuki',
            '40' => 'Toyota',
            '41' => 'Volkswagen',
            '42' => 'Volvo',
            '43' => 'ГАЗ',
            '44' => 'Лада',
            '45' => 'УАЗ',
        ];

        $autoModels = [
            '1' => ['49' => 'TLX','47' => 'RDX','50' => 'TSX','48' => 'TL','46' => 'MDX'],
            '2' => ['53' => '166','54' => 'Brera','55' => 'Giulietta','56' => 'MiTo','51' => '147','52' => '159'],
            '3' => ['72' => 'R8','70' => 'Q5','68' => 'A8','63' => 'A4 Allroad','64' => 'A5','65' => 'A6','58' => '90','59' => 'A1','60' => 'A2','61' => 'A3','62' => 'A4','57' => '100','73' => 'TT','71' => 'Q7','69' => 'Q3','67' => 'A7','66' => 'A6 Allroad'],
            '4' => ['76' => 'Mulsanne','74' => 'Continental','75' => 'Flying Spur'],
            '5' => ['77' => '1','80' => '3','79' => '2 Active Tourer','78' => '2','81' => '3 Gran Turismo','82' => '4','83' => '4 Gran Coupe','84' => '5','85' => '5 Gran Turismo','86' => '6','87' => '6 Gran Coupe','88' => '7','89' => 'X1','90' => 'X3','91' => 'X4','92' => 'X5','93' => 'X6'],
            '6' => ['94' => 'ATS','95' => 'CTS','96' => 'Escalade','97' => 'SRX','98' => 'STS'],
            '7' => ['99' => 'Amulet','100' => 'Fora','101' => 'M11','102' => 'Tiggo'],
            '8' => ['103' => 'Aveo','104' => 'Camaro','105' => 'Captiva','106' => 'Cobalt','107' => 'Cruze','108' => 'Epica','111' => 'Niva','112' => 'Orlando','113' => 'Spark','114' => 'Tahoe','115' => 'Trailblazer','109' => 'Lacetti','110' => 'Lanos'],
            '9' => ['116' => '300C','117' => '300M','118' => 'Sebring','119' => 'Voyager'],
            '10' => ['120' => 'Berlingo','121' => 'C-Crosser','122' => 'C-Elysee','123' => 'C1','124' => 'C3','125' => 'C3 Picasso','126' => 'C4','127' => 'C4 Aircross','128' => 'C4 Grand Picasso','129' => 'C4 Picasso','130' => 'C5','131' => 'C6','132' => 'C8','133' => 'DS3','134' => 'DS4','135' => 'DS5','136' => 'Jumper','137' => 'Jumpy','138' => 'Xsara'],
            '11' => ['139' => 'Matiz','140' => 'Nexia'],
            '12' => ['141' => 'mi-DO','142' => 'on-DO'],
            '13' => ['143' => '500','144' => 'Albea','145' => 'Bravo','146' => 'Doblo','147' => 'Ducato','148' => 'Freemont','149' => 'Linea','150' => 'Punto','151' => 'Stilo'],
            '14' => ['152' => 'C-Max','153' => 'EcoSport','154' => 'Edge','155' => 'Escape','156' => 'Expedition','157' => 'Explorer','158' => 'Fiesta','159' => 'Focus','160' => 'Fusion','161' => 'Galaxy','162' => 'Kuga','163' => 'Mondeo','164' => 'Ranger','165' => 'S-Max','166' => 'Tourneo','167' => 'Transit','168' => 'Transit Connect'],
            '15' => ['169' => 'Hover H1','170' => 'Hover H3','171' => 'Hover H5','172' => 'Hover H6'],
            '16' => ['173' => 'Accord','174' => 'Civic','175' => 'CR-V','176' => 'Crosstour','177' => 'Element','178' => 'Jazz','179' => 'Legend','180' => 'Pilot'],
            '17' => ['181' => 'H2','182' => 'H3'],
            '18' => ['183' => 'Accent','184' => 'Elantra','185' => 'Equus','186' => 'Genesis','187' => 'Getz','188' => 'Grand Santa Fe','189' => 'i20','190' => 'i30','191' => 'i40','192' => 'ix35','193' => 'ix55','194' => 'Matrix','195' => 'NF Sonata','196' => 'Porter','197' => 'Santa Fe','198' => 'Santa Fe Classic','199' => 'Solaris','200' => 'Sonata','201' => 'Starex (H1)','202' => 'Tucson','458' => 'Creta'],
            '19' => ['203' => 'EX','204' => 'FX','205' => 'G','206' => 'JX','207' => 'M','208' => 'M35','209' => 'M45','210' => 'Q40','211' => 'Q45','212' => 'Q50','213' => 'Q60','214' => 'Q70','215' => 'QX','216' => 'QX50','217' => 'QX60','218' => 'QX70','219' => 'QX80'],
            '20' => ['220' => 'X','221' => 'XE','222' => 'XF','223' => 'XJ','224' => 'XK'],
            '21' => ['225' => 'Cherokee','226' => 'Commander','227' => 'Compass','228' => 'Grand Cherokee','229' => 'Liberty','230' => 'Renegade','231' => 'Wrangler'],
            '22' => ['232' => 'ceed','233' => 'Cerato','234' => 'Mohave','235' => 'Optima','236' => 'Picanto','237' => 'Quoris','238' => 'Rio','239' => 'Sorento','240' => 'Soul','241' => 'Spectra','242' => 'Sportage','243' => 'Venga'],
            '23' => ['244' => 'Defender','245' => 'Discovery','246' => 'Discovery Sport','247' => 'Freelander','248' => 'Range Rover','249' => 'Range Rover Evoque','250' => 'Range Rover Sport'],
            '24' => ['251' => 'CT','252' => 'ES','253' => 'GS','254' => 'GX','255' => 'IS','256' => 'LS','257' => 'LX','258' => 'NX','259' => 'RX'],
            '25' => ['260' => '2','261' => '3','262' => '5','263' => '6','264' => 'BT-50','265' => 'CX-3','266' => 'CX-5','267' => 'CX-7','268' => 'CX-9','269' => 'MX-5'],
            '26' => ['270' => 'A','271' => 'B','272' => 'C','273' => 'Citan','274' => 'CL','275' => 'CLA','276' => 'CLS','277' => 'E','278' => 'G','279' => 'GL','280' => 'GLA','281' => 'GLE','282' => 'GLK','283' => 'M','284' => 'R','285' => 'S','286' => 'SL','287' => 'SLK','288' => 'Sprinter','289' => 'V','290' => 'Viano','291' => 'Vito'],
            '27' => ['292' => 'Cooper','293' => 'Countryman'],
            '28' => ['294' => 'ASX','295' => 'Colt','296' => 'Eclipse','297' => 'Galant','298' => 'Grandis','299' => 'L200','300' => 'Lancer','301' => 'Outlander','302' => 'Pajero','303' => 'Pajero Sport'],
            '29' => ['304' => 'Almera','305' => 'Almera Classic','306' => 'Juke','307' => 'Micra','308' => 'Murano','309' => 'Navara','310' => 'Note','311' => 'Pathfinder','312' => 'Patrol','313' => 'Qashqai','314' => 'Sentra','315' => 'Teana','316' => 'Terrano','317' => 'Tiida','318' => 'X-Trail'],
            '30' => ['319' => 'Antara','320' => 'Astra','321' => 'Corsa','322' => 'Frontera','323' => 'Insignia','324' => 'Meriva','325' => 'Mokka','326' => 'Omega','327' => 'Zafira'],
            '31' => ['328' => '107','329' => '2008','330' => '206','331' => '207','332' => '208','333' => '3008','334' => '301','335' => '307','336' => '308','337' => '4007','338' => '4008','339' => '407','340' => '408','341' => '5008','342' => '508','343' => '607','344' => 'Boxer','345' => 'Expert','346' => 'Partner','347' => 'RCZ'],
            '32' => ['348' => '911','349' => 'Boxster','350' => 'Cayenne','351' => 'Cayman','352' => 'Macan','353' => 'Panamera'],
            '33' => ['354' => 'Clio','355' => 'Duster','356' => 'Espace','357' => 'Fluence','358' => 'Grand Scenic','359' => 'Kangoo','360' => 'Koleos','361' => 'Laguna','362' => 'Latitude','363' => 'Logan','364' => 'Master','365' => 'Megane','366' => 'Sandero','367' => 'Sandero Stepway','368' => 'Scenic'],
            '34' => ['369' => '9-3','370' => '9-5'],
            '35' => ['371' => 'Alhambra','372' => 'Altea','373' => 'Ibiza','374' => 'Leon','375' => 'Toledo'],
            '36' => ['376' => 'Fabia','377' => 'Octavia','378' => 'Rapid','379' => 'Roomster','380' => 'Superb','381' => 'Yeti'],
            '37' => ['382' => 'Actyon','383' => 'Kyron','384' => 'Rexton'],
            '38' => ['385' => 'Forester','386' => 'Impreza','387' => 'Legacy','388' => 'Outback','389' => 'Tribeca','390' => 'XV'],
            '39' => ['391' => 'Grand Vitara','392' => 'Jimny','393' => 'Splash','394' => 'Swift','395' => 'SX4','396' => 'Vitara'],
            '40' => ['397' => 'Auris','398' => 'Avensis','399' => 'Camry','400' => 'Corolla','401' => 'GT86','402' => 'Highlander','403' => 'Hilux','404' => 'Land Cruiser','405' => 'Land Cruiser Prado','406' => 'Prius','407' => 'RAV4','408' => 'Tundra','409' => 'Venza','410' => 'Verso','411' => 'Yaris'],
            '41' => ['412' => 'Amarok','413' => 'Beetle','414' => 'Caddy','415' => 'Caravelle','416' => 'Crafter','417' => 'Golf','418' => 'Golf Plus','419' => 'Jetta','420' => 'Multivan','421' => 'Passat','422' => 'Passat CC','423' => 'Phaeton','424' => 'Polo','425' => 'Scirocco','426' => 'Sharan','427' => 'Tiguan','428' => 'Touareg','429' => 'Touran','430' => 'Transporter'],
            '42' => ['431' => 'C30','432' => 'S40','433' => 'S60','434' => 'S80','435' => 'V50','436' => 'V60','437' => 'V70','438' => 'XC60','439' => 'XC70','440' => 'XC90'],
            '43' => ['441' => 'Газель Next','442' => 'Газель Бизнес','443' => 'Соболь Бизнес'],
            '44' => ['444' => 'Lada 2110','445' => 'Lada 2111','446' => 'Lada 2112','447' => 'Lada 2113','448' => 'Lada 2114','449' => 'Lada 2115','450' => 'Lada 4x4 (Niva)','451' => 'Lada Granta','452' => 'Lada Kalina','453' => 'Lada Largus','454' => 'Lada Priora','457' => 'Lada Vesta'],
            '45' => ['455' => 'Hunter','456' => 'Patriot'],
        ];

        foreach ($autoBrands as $autoBrandId => $autoBrandName) {
            $autoBrand = AutoBrand::firstOrCreate(['name' => $autoBrandName]);

            if (!empty($autoModels[$autoBrandId])) {
                foreach ($autoModels[$autoBrandId] as $autoModel) {
                    $autoBrand->models()->create([
                        'name' => $autoModel,
                        'image' => '',
                        'description' => ''
                    ]);
                }
            }
        }
    }
}
