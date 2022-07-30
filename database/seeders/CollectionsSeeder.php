<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Collection;

class CollectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array (
              0 => 
              array (
                'uuid' => '62ac32ef803a14179e68df50',
                'symbol' => 'primates',
                'name' => 'Primates',
                'date' => '2022-07-15',
                'image' => 'https://bafybeifnx4apyushfc3i2tg5wx2xgudcfxgisd2sven2mhxixpghuo2jeu.ipfs.nftstorage.link/',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 296454.358432293,
                  'value1h' => 0,
                  'value1d' => 2351.13286691,
                  'value7d' => 16543.796544728,
                  'value30d' => 279865.22171557904,
                  'prev1h' => 15.99,
                  'prev1d' => 2980.71197232,
                  'prev7d' => 3852.46231506,
                  'prev30d' => 16589.136716713998,
                  'delta1h' => 0,
                  'delta1d' => 0.7887823072955369,
                  'delta7d' => 0.6102935407619638,
                  'delta30d' => 0.14172725844987286,
                  'value1dME' => 2278.72289999,
                  'value7dME' => 16219.453225768,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 14.222704867356795,
                  'value1h' => 0,
                  'value1d' => 19.148931932689074,
                  'value7d' => 16.930535726271398,
                  'value30d' => 16.47747362259384,
                  'prev1h' => 15.99,
                  'prev1d' => 16.383172415730336,
                  'prev7d' => 13.850033844404333,
                  'prev30d' => 3.919498518544441,
                  'delta1h' => 0,
                  'delta1d' => 1.1688170915117262,
                  'delta7d' => 1.3825909848173832,
                  'delta30d' => 4.885556619574968,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 15.98,
                  'value1d' => 15,
                  'value7d' => 11,
                  'value30d' => 2.5,
                  'prev1h' => 15.99,
                  'prev1d' => 11.9,
                  'prev7d' => 11,
                  'prev30d' => 0.98,
                  'delta1h' => 0.9993746091307067,
                  'delta1d' => 1.2605042016806722,
                  'delta7d' => 1.3636363636363635,
                  'delta30d' => 15.306122448979592,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 284297.647593595,
                  'value1h' => 0,
                  'value1d' => 2278.72289999,
                  'value7d' => 16219.453225768,
                  'value30d' => 270230.567410539,
                  'prev1h' => 15.99,
                  'prev1d' => 2916.20469,
                  'prev7d' => 3836.4593749,
                  'prev30d' => 14067.080183056,
                  'delta1h' => 0,
                  'delta1d' => 0.781400190392671,
                  'delta7d' => 0.5939650801201033,
                  'delta30d' => 0.16198975695999476,
                )),
              ),
              1 => 
              array (
                'uuid' => '62ac32fc803a14179e69617b',
                'symbol' => 'okay_bears',
                'name' => 'Okay Bears',
                'date' => '2022-07-15',
                'image' => 'https://bafkreidgfsdjx4nt4vctch73hcchb3pkiwic2onfw5yr4756adchogk5de.ipfs.nftstorage.link/',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 1873958.351449027,
                  'value1h' => 0,
                  'value1d' => 906.98,
                  'value7d' => 14309.85377844,
                  'value30d' => 105181.73296592,
                  'prev1h' => 91,
                  'prev1d' => 2301.49,
                  'prev7d' => 1825.82588032,
                  'prev30d' => 12791.74411216,
                  'delta1h' => 0,
                  'delta1d' => 0.39408383264754576,
                  'delta7d' => 0.49675054438435273,
                  'delta30d' => 0.07090354466501662,
                  'value1dME' => 906.98,
                  'value7dME' => 14121.948789,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 93.05394237596563,
                  'value1h' => 0,
                  'value1d' => 100.77555555555556,
                  'value7d' => 111.19644715748032,
                  'value30d' => 110.62241599889504,
                  'prev1h' => 91,
                  'prev1d' => 115.07449999999999,
                  'prev7d' => 104.45466666666667,
                  'prev30d' => 97.27712871287129,
                  'delta1h' => 0,
                  'delta1d' => 0.8757418503278794,
                  'delta7d' => 0.9647779153529654,
                  'delta30d' => 1.0359635084728953,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 98.99,
                  'value1d' => 97,
                  'value7d' => 90,
                  'value30d' => 80,
                  'prev1h' => 98.99,
                  'prev1d' => 92,
                  'prev7d' => 94.94,
                  'prev30d' => 75,
                  'delta1h' => 1,
                  'delta1d' => 1.0543478260869565,
                  'delta7d' => 1.0216979144722984,
                  'delta30d' => 1.2933333333333332,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 1681670.846618451,
                  'value1h' => 0,
                  'value1d' => 906.98,
                  'value7d' => 14121.948789,
                  'value30d' => 100113.286479,
                  'prev1h' => 91,
                  'prev1d' => 2301.49,
                  'prev7d' => 1566.82,
                  'prev30d' => 9824.99,
                  'delta1h' => 0,
                  'delta1d' => 0.39408383264754576,
                  'delta7d' => 0.5788667492117793,
                  'delta30d' => 0.09231357996293127,
                )),
              ),
              2 => 
              array (
                'uuid' => '62ac3303803a14179e69afba',
                'symbol' => 'gothic_degens',
                'name' => 'Gothic Degens ',
                'date' => '2022-07-15',
                'totalItems' => 4448,
                'image' => 'https://creator-hub-prod.s3.us-east-2.amazonaws.com/gothic_degens_pfp_1654733979006.png',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 43663.016312607,
                  'value1h' => 10,
                  'value1d' => 1155.991782672,
                  'value7d' => 12087.037996358,
                  'value30d' => 40815.882684805,
                  'prev1h' => 99.03,
                  'prev1d' => 1072.668771304,
                  'prev7d' => 2182.719495097,
                  'prev30d' => 1080.46471794,
                  'delta1h' => 0.10097950116126427,
                  'delta1d' => 1.0776782298478844,
                  'delta7d' => 0.5296107838266353,
                  'delta30d' => 1.0699023887388004,
                  'value1dME' => 1155.991782672,
                  'value7dME' => 11953.560792158,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 3.0464983415759046,
                  'value1h' => 10,
                  'value1d' => 10.905582855396226,
                  'value7d' => 12.037825571156093,
                  'value30d' => 5.283109191277778,
                  'prev1h' => 9.903,
                  'prev1d' => 13.081326479317074,
                  'prev7d' => 9.216486552800866,
                  'prev30d' => 1.1936806396596857,
                  'delta1h' => 1.0097950116126426,
                  'delta1d' => 0.8336756117691181,
                  'delta7d' => 1.1832690030977202,
                  'delta30d' => 9.13609762365365,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 10,
                  'value1d' => 9,
                  'value7d' => 6.77,
                  'value30d' => 1.39,
                  'prev1h' => 9.5,
                  'prev1d' => 11.5,
                  'prev7d' => 6.96,
                  'prev30d' => 0.09,
                  'delta1h' => 1.0526315789473684,
                  'delta1d' => 0.782608695652174,
                  'delta7d' => 1.293103448275862,
                  'delta30d' => 100,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 42002.072635307,
                  'value1h' => 10,
                  'value1d' => 1155.991782672,
                  'value7d' => 11953.560792158,
                  'value30d' => 39464.825658845,
                  'prev1h' => 99.03,
                  'prev1d' => 1072.668771304,
                  'prev7d' => 2129.008393697,
                  'prev30d' => 911.9720087,
                  'delta1h' => 0.10097950116126427,
                  'delta1d' => 1.0776782298478844,
                  'delta7d' => 0.5429719234993868,
                  'delta30d' => 1.2675737540671297,
                )),
              ),
              3 => 
              array (
                'uuid' => '62c8b04e639e39ab21fa7e5b',
                'symbol' => 'netrunner',
                'name' => 'Netrunner',
                'date' => '2022-07-15',
                'image' => 'https://bafybeidm5eagsdbikbqokdtcmm5b2jjqetcjxg7b3bsdyxft6rgdalm2nu.ipfs.nftstorage.link/',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 11004.713554104,
                  'value1h' => 4.25,
                  'value1d' => 236.7579,
                  'value7d' => 11004.713554104,
                  'value30d' => 11004.713554104,
                  'prev1h' => 7.9,
                  'prev1d' => 429.8879,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 0.5379746835443038,
                  'delta1d' => 0.5507433449510908,
                  'value1dME' => 236.7579,
                  'value7dME' => 10945.302027304,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 3.5387332774988685,
                  'value1h' => 2.125,
                  'value1d' => 2.5187010638297873,
                  'value7d' => 3.5387332774988685,
                  'value30d' => 3.5387332774988685,
                  'prev1h' => 2.6333333333333333,
                  'prev1d' => 2.8659193333333333,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 0.8069620253164557,
                  'delta1d' => 0.8788457632198257,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 2.1,
                  'value1d' => 2.1,
                  'value7d' => 1.95,
                  'value30d' => 1.95,
                  'prev1h' => 2.1,
                  'prev1d' => 2.15,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 1,
                  'delta1d' => 0.9767441860465117,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 10945.302027304,
                  'value1h' => 4.25,
                  'value1d' => 236.7579,
                  'value7d' => 10945.302027304,
                  'value30d' => 10945.302027304,
                  'prev1h' => 7.9,
                  'prev1d' => 429.8879,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 0.5379746835443038,
                  'delta1d' => 0.5507433449510908,
                )),
              ),
              4 => 
              array (
                'uuid' => '62c7dbff639e39ab21de609b',
                'symbol' => 'sdgn',
                'name' => 'Saint Degen',
                'date' => '2022-07-15',
                'totalItems' => 5555,
                'image' => 'https://creator-hub-prod.s3.us-east-2.amazonaws.com/sdgn_pfp_1657245071791.png',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 10700.718902343,
                  'value1h' => 5.28,
                  'value1d' => 333.61174875999995,
                  'value7d' => 10700.718902343,
                  'value30d' => 10700.718902343,
                  'prev1h' => 12.7239,
                  'prev1d' => 1023.58032279,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 0.41496710914106527,
                  'delta1d' => 0.3259263013679919,
                  'value1dME' => 325.270879,
                  'value7dME' => 10450.910357003,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 0.8567724509758157,
                  'value1h' => 1.32,
                  'value1d' => 1.0425348685897435,
                  'value7d' => 0.8567724509758157,
                  'value30d' => 0.8567724509758157,
                  'prev1h' => 1.060325,
                  'prev1d' => 1.2742166116050955,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 1.244901327423196,
                  'delta1d' => 0.8181771129764909,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 0.95,
                  'value1d' => 0.69999,
                  'value7d' => 0.045,
                  'value30d' => 0.045,
                  'prev1h' => 0.94,
                  'prev1d' => 0.76,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 1.0106382978723405,
                  'delta1d' => 0.9210394736842105,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 10450.910357003,
                  'value1h' => 5.28,
                  'value1d' => 325.270879,
                  'value7d' => 10450.910357003,
                  'value30d' => 10450.910357003,
                  'prev1h' => 12.7239,
                  'prev1d' => 1000.26004011,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 0.41496710914106527,
                  'delta1d' => 0.3251863175142231,
                )),
              ),
              5 => 
              array (
                'uuid' => '62ac32f6803a14179e692607',
                'symbol' => 'degods',
                'name' => 'DeGods',
                'date' => '2022-07-15',
                'image' => 'https://i.imgur.com/fO3tI1t.png',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 639742.689202088,
                  'value1h' => 0,
                  'value1d' => 1751,
                  'value7d' => 10513.157,
                  'value30d' => 60000.18,
                  'prev1h' => 0,
                  'prev1d' => 1717.97,
                  'prev7d' => 1991,
                  'prev30d' => 6925.54633,
                  'delta1d' => 1.0192261797353854,
                  'delta7d' => 0.8794575590155701,
                  'delta30d' => 0.25283203902846463,
                  'value1dME' => 1751,
                  'value7dME' => 10513.157,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 133.9709471826212,
                  'value1h' => 0,
                  'value1d' => 291.8333333333333,
                  'value7d' => 309.21049999999997,
                  'value30d' => 329.67131868131867,
                  'prev1h' => 0,
                  'prev1d' => 286.3283333333333,
                  'prev7d' => 284.42857142857144,
                  'prev30d' => 384.7525738888889,
                  'delta1d' => 1.0192261797353854,
                  'delta7d' => 1.0260338188514984,
                  'delta30d' => 0.7584961170853939,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 285,
                  'value1d' => 282,
                  'value7d' => 250,
                  'value30d' => 250,
                  'prev1h' => 285,
                  'prev1d' => 275,
                  'prev7d' => 280,
                  'prev30d' => 310,
                  'delta1h' => 1,
                  'delta1d' => 1.0254545454545454,
                  'delta7d' => 1.0071428571428571,
                  'delta30d' => 0.9096774193548387,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 629529.480811137,
                  'value1h' => 0,
                  'value1d' => 1751,
                  'value7d' => 10513.157,
                  'value30d' => 60000.18,
                  'prev1h' => 0,
                  'prev1d' => 1717.97,
                  'prev7d' => 1991,
                  'prev30d' => 6925.54633,
                  'delta1d' => 1.0192261797353854,
                  'delta7d' => 0.8794575590155701,
                  'delta30d' => 0.25283203902846463,
                )),
              ),
              6 => 
              array (
                'uuid' => '62cb7be4639e39ab217f98f6',
                'symbol' => 'weepingangels',
                'name' => 'Weeping Angels',
                'date' => '2022-07-15',
                'totalItems' => 4444,
                'image' => 'https://creator-hub-prod.s3.us-east-2.amazonaws.com/weepingangels_pfp_1657498694889.gif',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 9342.355488547,
                  'value1h' => 27.118,
                  'value1d' => 2539.2065907,
                  'value7d' => 9342.355488547,
                  'value30d' => 9342.355488547,
                  'prev1h' => 51.2168999,
                  'prev1d' => 2762.09685666,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 0.5294736708576147,
                  'delta1d' => 0.9193039645142913,
                  'value1dME' => 2521.5443309,
                  'value7dME' => 9162.476483107,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 1.0784459137366997,
                  'value1h' => 3.013111111111111,
                  'value1d' => 3.3891724877688176,
                  'value7d' => 1.0784459137366997,
                  'value30d' => 1.0784459137366997,
                  'prev1h' => 3.0127588176470588,
                  'prev1d' => 2.1796371232070912,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 1.0001169338421612,
                  'delta1d' => 1.5549251073417354,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 2.5,
                  'value1d' => 2.25,
                  'value7d' => 0.15,
                  'value30d' => 0.15,
                  'prev1h' => 2.68,
                  'prev1d' => 1.22,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 0.9328358208955223,
                  'delta1d' => 1.8442622950819672,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 9162.476483107,
                  'value1h' => 27.118,
                  'value1d' => 2521.5443309,
                  'value7d' => 9162.476483107,
                  'value30d' => 9162.476483107,
                  'prev1h' => 51.2168999,
                  'prev1d' => 2704.9296699,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 0.5294736708576147,
                  'delta1d' => 0.9322032875602345,
                )),
              ),
              7 => 
              array (
                'uuid' => '62cf011d4725bcd0ca2edef0',
                'symbol' => 'liberty_square',
                'name' => 'Liberty Square: The Sinister Squirrel Syndicate',
                'date' => '2022-07-15',
                'totalItems' => 9999,
                'image' => 'https://dl.airtable.com/.attachmentThumbnails/7bf792aeb747bc42679d845ed24fe6fe/fce75af7',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 8911.855478054,
                  'value1h' => 204.0348,
                  'value1d' => 4454.9892634650005,
                  'value7d' => 8911.855478054,
                  'value30d' => 8911.855478054,
                  'prev1h' => 392.00007016,
                  'prev1d' => 4456.866214589,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 0.5204968456171972,
                  'delta1d' => 0.9995788630320884,
                  'value1dME' => 4354.900800465,
                  'value7dME' => 8487.670341214,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 2.0787828413455793,
                  'value1h' => 2.582718987341772,
                  'value1d' => 2.1983345787304396,
                  'value7d' => 2.0787828413455793,
                  'value30d' => 2.0787828413455793,
                  'prev1h' => 2.7801937857142858,
                  'prev1d' => 1.9661130070166508,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 0.9289708511013816,
                  'delta1d' => 1.1181120163922613,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 2.29,
                  'value1d' => 1.79,
                  'value7d' => 0.9,
                  'value30d' => 0.9,
                  'prev1h' => 2.12,
                  'prev1d' => 0.9,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 1.080188679245283,
                  'delta1d' => 1.988888888888889,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 8487.670341214,
                  'value1h' => 204.0348,
                  'value1d' => 4354.900800465,
                  'value7d' => 8487.670341214,
                  'value30d' => 8487.670341214,
                  'prev1h' => 389.22713,
                  'prev1d' => 4132.769540749,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 0.524204980264351,
                  'delta1d' => 1.0537487652107846,
                )),
              ),
              8 => 
              array (
                'uuid' => '62c99e76639e39ab21e5cc96',
                'symbol' => 'soap',
                'name' => 'Son of a PaPe',
                'date' => '2022-07-15',
                'totalItems' => 4444,
                'image' => 'https://creator-hub-prod.s3.us-east-2.amazonaws.com/soap_pfp_1657388721530.gif',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 7774.638295731,
                  'value1h' => 0,
                  'value1d' => 216.35,
                  'value7d' => 7774.638295731,
                  'value30d' => 7774.638295731,
                  'prev1h' => 0.34,
                  'prev1d' => 437.69191414,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 0,
                  'delta1d' => 0.49429745675127634,
                  'value1dME' => 216.35,
                  'value7dME' => 7760.643401171,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 2.108870489448641,
                  'value1h' => 0,
                  'value1d' => 0.9365800865800865,
                  'value7d' => 2.108870489448641,
                  'value30d' => 2.108870489448641,
                  'prev1h' => 0.34,
                  'prev1d' => 1.285855199117647,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 0,
                  'delta1d' => 0.7283713494511412,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 0.3591,
                  'value1d' => 0.33,
                  'value7d' => 0.035,
                  'value30d' => 0.035,
                  'prev1h' => 0.34,
                  'prev1d' => 0.51,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 1.056176470588235,
                  'delta1d' => 0.6470588235294118,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 7760.643401171,
                  'value1h' => 0,
                  'value1d' => 216.35,
                  'value7d' => 7760.643401171,
                  'value30d' => 7760.643401171,
                  'prev1h' => 0.34,
                  'prev1d' => 437.1907677,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 0,
                  'delta1d' => 0.4948640638918048,
                )),
              ),
              9 => 
              array (
                'uuid' => '62c8bc5e639e39ab21177374',
                'symbol' => 'the_resurrected',
                'name' => 'The Resurrected',
                'date' => '2022-07-15',
                'image' => 'https://bafybeidoaeoldxea6yqumy2p2gyweixm4jpbdwtvrlz5x6w4jiyxpwv3da.ipfs.nftstorage.link/0.gif',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 7608.783187807,
                  'value1h' => 0,
                  'value1d' => 457.237,
                  'value7d' => 7608.783187807,
                  'value30d' => 7608.783187807,
                  'prev1h' => 11.5,
                  'prev1d' => 629.297320583,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 0,
                  'delta1d' => 0.7265834209756398,
                  'value1dME' => 457.237,
                  'value7dME' => 7586.989748487,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 7.051105714207249,
                  'value1h' => 0,
                  'value1d' => 5.7154625,
                  'value7d' => 7.051105714207249,
                  'value30d' => 7.051105714207249,
                  'prev1h' => 5.75,
                  'prev1d' => 5.8801525862547175,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 0,
                  'delta1d' => 0.9719922087328665,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 5.99,
                  'value1d' => 5,
                  'value7d' => 3.74,
                  'value30d' => 3.74,
                  'prev1h' => 5.7,
                  'prev1d' => 5,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 1.050877192982456,
                  'delta1d' => 1,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 7586.989748487,
                  'value1h' => 0,
                  'value1d' => 457.237,
                  'value7d' => 7586.989748487,
                  'value30d' => 7586.989748487,
                  'prev1h' => 11.5,
                  'prev1d' => 623.296174143,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 0,
                  'delta1d' => 0.7335790254587672,
                )),
              ),
              10 => 
              array (
                'uuid' => '62ac3304803a14179e69bd64',
                'symbol' => 'quantum_traders',
                'name' => 'Quantum Traders',
                'date' => '2022-07-15',
                'totalItems' => 0,
                'image' => 'https://dl.airtable.com/.attachments/c1bbf7661f0d40935bf8dfbe50b340cc/e0cad0b5/ItzsH50B_400x400.jpeg',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 63907.405290876,
                  'value1h' => 0,
                  'value1d' => 2644.6251,
                  'value7d' => 7011.280034279999,
                  'value30d' => 15366.386418040001,
                  'prev1h' => 10.8,
                  'prev1d' => 1757.84193428,
                  'prev7d' => 307.05,
                  'prev30d' => 55.99,
                  'delta1h' => 0,
                  'delta1d' => 1.5044726425207398,
                  'delta7d' => 8.613011235955057,
                  'delta30d' => 47.23388283622076,
                  'value1dME' => 2644.6251,
                  'value7dME' => 6997.27799,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 8.391094932960925,
                  'value1h' => 0,
                  'value1d' => 12.358061214953272,
                  'value7d' => 12.472866292335116,
                  'value30d' => 10.741247331932774,
                  'prev1h' => 10.8,
                  'prev1d' => 13.518138682170543,
                  'prev7d' => 12.793750000000001,
                  'prev30d' => 5.599,
                  'delta1h' => 0,
                  'delta1d' => 0.9141836391464655,
                  'delta7d' => 0.965945185340754,
                  'delta30d' => 2.2071907867392877,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 10.5,
                  'value1d' => 10.1,
                  'value7d' => 9,
                  'value30d' => 4.59,
                  'prev1h' => 10.73,
                  'prev1d' => 11.99,
                  'prev7d' => 10.25,
                  'prev30d' => 4.99,
                  'delta1h' => 0.9785647716682199,
                  'delta1d' => 0.8423686405337781,
                  'delta7d' => 0.9853658536585366,
                  'delta30d' => 2.024048096192385,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 63780.712585436,
                  'value1h' => 0,
                  'value1d' => 2644.6251,
                  'value7d' => 6997.27799,
                  'value30d' => 15338.50119,
                  'prev1h' => 10.8,
                  'prev1d' => 1743.83989,
                  'prev7d' => 307.05,
                  'prev30d' => 55.99,
                  'delta1h' => 0,
                  'delta1d' => 1.5165527037003381,
                  'delta7d' => 8.613011235955057,
                  'delta30d' => 47.23388283622076,
                )),
              ),
              11 => 
              array (
                'uuid' => '62ac3304803a14179e69b386',
                'symbol' => 'lizards',
                'name' => 'Reptilian Renegade (Lizards)',
                'date' => '2022-07-15',
                'totalItems' => 0,
                'image' => 'https://bafybeiaodvhrw4xb36l2ja2a377anqd2ykqznzspb5rqdtokaocozona6y.ipfs.nftstorage.link/',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 160203.435126304,
                  'value1h' => 27.5,
                  'value1d' => 463.1689,
                  'value7d' => 6741.91460804,
                  'value30d' => 9411.161879964999,
                  'prev1h' => 16.59,
                  'prev1d' => 2793.4522604100002,
                  'prev7d' => 119.421,
                  'prev30d' => 87.94,
                  'delta1h' => 1.6576250753465944,
                  'delta1d' => 0.16580519615968659,
                  'delta7d' => 3.8784543756960668,
                  'delta30d' => 5.2668740050034115,
                  'value1dME' => 463.1689,
                  'value7dME' => 6691.73594068,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 10.71544597577144,
                  'value1h' => 9.166666666666666,
                  'value1d' => 9.263378,
                  'value7d' => 8.281851411732672,
                  'value30d' => 6.199589150990722,
                  'prev1h' => 8.295,
                  'prev1d' => 10.742515773992249,
                  'prev7d' => 4.117965517241379,
                  'prev30d' => 3.823478260869565,
                  'delta1h' => 1.105083383564396,
                  'delta1d' => 0.8623099276639408,
                  'delta7d' => 2.2495035379037187,
                  'delta30d' => 2.422762042301569,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 8.5,
                  'value1d' => 7.9,
                  'value7d' => 2.18,
                  'value30d' => 2.18,
                  'prev1h' => 8.2,
                  'prev1d' => 7.83,
                  'prev7d' => 2.99,
                  'prev30d' => 3.2,
                  'delta1h' => 1.0365853658536586,
                  'delta1d' => 1.0089399744572158,
                  'delta7d' => 2.6421404682274248,
                  'delta30d' => 2.46875,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 151805.723138754,
                  'value1h' => 27.5,
                  'value1d' => 463.1689,
                  'value7d' => 6691.73594068,
                  'value30d' => 9355.180028845,
                  'prev1h' => 16.59,
                  'prev1d' => 2771.56906969,
                  'prev7d' => 119.421,
                  'prev30d' => 87.94,
                  'delta1h' => 1.6576250753465944,
                  'delta1d' => 0.16711432706665522,
                  'delta7d' => 3.8784543756960668,
                  'delta30d' => 5.2668740050034115,
                )),
              ),
              12 => 
              array (
                'uuid' => '62c8779d639e39ab21794d3a',
                'symbol' => 'shrouded_playground',
                'name' => 'Shrouded Playground',
                'date' => '2022-07-15',
                'image' => 'https://bafkreicvh4zti55wrpypyf66cfnkehohfme75w636mk3o7y33mbaactcdq.ipfs.nftstorage.link/',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 6464.285931824,
                  'value1h' => 3.28,
                  'value1d' => 209.173142869,
                  'value7d' => 6464.285931824,
                  'value30d' => 6464.285931824,
                  'prev1h' => 0.79,
                  'prev1d' => 439.44298327999996,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 4.151898734177215,
                  'delta1d' => 0.4759960923888984,
                  'value1dME' => 206.268812669,
                  'value7dME' => 6280.368544704,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 2.5457513355103365,
                  'value1h' => 0.82,
                  'value1d' => 1.0799414275863874,
                  'value7d' => 2.5457513355103365,
                  'value30d' => 2.5457513355103365,
                  'prev1h' => 0.79,
                  'prev1d' => 1.673115521400778,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 1.0379746835443038,
                  'delta1d' => 0.6454673414793445,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 0.79,
                  'value1d' => 0.59,
                  'value7d' => 0.59,
                  'value30d' => 0.59,
                  'prev1h' => 0.79,
                  'prev1d' => 0.7,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 1,
                  'delta1d' => 0.8428571428571429,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 6280.368544704,
                  'value1h' => 3.28,
                  'value1d' => 206.268812669,
                  'value7d' => 6280.368544704,
                  'value30d' => 6280.368544704,
                  'prev1h' => 0.79,
                  'prev1d' => 429.990689,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 4.151898734177215,
                  'delta1d' => 0.4797053004768669,
                )),
              ),
              13 => 
              array (
                'uuid' => '62be5a3d451b98e7dbbf1546',
                'symbol' => 'degentown',
                'name' => 'DegenTown',
                'date' => '2022-07-15',
                'image' => 'https://dl.airtable.com/.attachmentThumbnails/408f2a34f3ee1f67856cca3a226d71ab/9679778e',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 78100.83206583699,
                  'value1h' => 4,
                  'value1d' => 321.705,
                  'value7d' => 5747.628300708,
                  'value30d' => 78100.83206583699,
                  'prev1h' => 20.98,
                  'prev1d' => 444.271,
                  'prev7d' => 2136.53223304,
                  'prev30d' => 0,
                  'delta1h' => 0.19065776930409914,
                  'delta1d' => 0.724118837376286,
                  'delta7d' => 0.1505734362557483,
                  'value1dME' => 321.705,
                  'value7dME' => 5693.624240228,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 7.423917199422357,
                  'value1h' => 4,
                  'value1d' => 6.4341,
                  'value7d' => 6.926550170593674,
                  'value30d' => 7.423917199422357,
                  'prev1h' => 4.196,
                  'prev1d' => 5.845671052631579,
                  'prev7d' => 10.784394871794872,
                  'prev30d' => 0,
                  'delta1h' => 0.9532888465204957,
                  'delta1d' => 1.1006606328119548,
                  'delta7d' => 0.5966120562617305,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 4,
                  'value1d' => 3.9,
                  'value7d' => 3.9,
                  'value30d' => 2.99,
                  'prev1h' => 4.1,
                  'prev1d' => 4.5,
                  'prev7d' => 9,
                  'prev30d' => 0,
                  'delta1h' => 0.9756097560975611,
                  'delta1d' => 0.8666666666666667,
                  'delta7d' => 0.43333333333333335,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 76637.097249637,
                  'value1h' => 4,
                  'value1d' => 321.705,
                  'value7d' => 5693.624240228,
                  'value30d' => 76637.097249637,
                  'prev1h' => 20.98,
                  'prev1d' => 444.271,
                  'prev7d' => 2102.957,
                  'prev30d' => 0,
                  'delta1h' => 0.19065776930409914,
                  'delta1d' => 0.724118837376286,
                  'delta7d' => 0.15297745032352064,
                )),
              ),
              14 => 
              array (
                'uuid' => '62cb19c2639e39ab21c5039f',
                'symbol' => 'nexilabs',
                'name' => 'NexiLabs',
                'date' => '2022-07-15',
                'totalItems' => 3333,
                'image' => 'https://dl.airtable.com/.attachmentThumbnails/ad185b69b18b1be92d73d4b855c49fc9/03593e4a',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 5269.986425982001,
                  'value1h' => 4.15,
                  'value1d' => 104.122281689,
                  'value7d' => 5269.986425982001,
                  'value30d' => 5269.986425982001,
                  'prev1h' => 7.559,
                  'prev1d' => 214.12201544,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 0.5490144198968118,
                  'delta1d' => 0.4862754606294864,
                  'value1dME' => 102.920244369,
                  'value7dME' => 5225.597114582,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 2.1901077596739316,
                  'value1h' => 1.0375,
                  'value1d' => 1.2252410043928572,
                  'value7d' => 2.1901077596739316,
                  'value30d' => 2.1901077596739316,
                  'prev1h' => 1.88975,
                  'prev1d' => 1.4113964834437085,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 0.5490144198968118,
                  'delta1d' => 0.8681054677161694,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 0.99,
                  'value1d' => 0.95,
                  'value7d' => 0.89,
                  'value30d' => 0.89,
                  'prev1h' => 0.979,
                  'prev1d' => 0.89,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 1.0112359550561798,
                  'delta1d' => 1.0674157303370786,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 5225.597114582,
                  'value1h' => 4.15,
                  'value1d' => 102.920244369,
                  'value7d' => 5225.597114582,
                  'value30d' => 5225.597114582,
                  'prev1h' => 7.559,
                  'prev1d' => 213.120869,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 0.5490144198968118,
                  'delta1d' => 0.48291959793482264,
                )),
              ),
              15 => 
              array (
                'uuid' => '62ac3302803a14179e69a6bf',
                'symbol' => 'cets_on_creck',
                'name' => 'CETS ON CRECK',
                'date' => '2022-07-15',
                'totalItems' => 6969,
                'image' => 'https://creator-hub-prod.s3.us-east-2.amazonaws.com/cats_on_crack_pfp_1644850873089.png',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 324593.943598982,
                  'value1h' => 0,
                  'value1d' => 1182.66203732,
                  'value7d' => 4692.70272732,
                  'value30d' => 31271.23649766,
                  'prev1h' => 78,
                  'prev1d' => 701.08,
                  'prev7d' => 808.68,
                  'prev30d' => 1487.88,
                  'delta1h' => 0,
                  'delta1d' => 1.686914528042449,
                  'delta7d' => 1.4624598571993868,
                  'delta30d' => 0.7948638581874883,
                  'value1dME' => 1135.66,
                  'value7dME' => 4645.70069,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 24.47681802936413,
                  'value1h' => 0,
                  'value1d' => 51.620909090909095,
                  'value7d' => 51.61889655555555,
                  'value30d' => 46.83468293810241,
                  'prev1h' => 78,
                  'prev1d' => 50.07714285714286,
                  'prev7d' => 53.912,
                  'prev30d' => 47.99612903225807,
                  'delta1h' => 0,
                  'delta1d' => 1.0308277618427673,
                  'delta7d' => 0.9575031364243415,
                  'delta30d' => 1.0755223417333264,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 49.99,
                  'value1d' => 43.4,
                  'value7d' => 43,
                  'value30d' => 33,
                  'prev1h' => 49.99,
                  'prev1d' => 43.4,
                  'prev7d' => 50,
                  'prev30d' => 40,
                  'delta1h' => 1,
                  'delta1d' => 1,
                  'delta7d' => 0.868,
                  'delta30d' => 1.085,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 321649.865723874,
                  'value1h' => 0,
                  'value1d' => 1135.66,
                  'value7d' => 4645.70069,
                  'value30d' => 31098.2294709,
                  'prev1h' => 78,
                  'prev1d' => 701.08,
                  'prev7d' => 808.68,
                  'prev30d' => 1487.88,
                  'delta1h' => 0,
                  'delta1d' => 1.6198721971814913,
                  'delta7d' => 1.4043379334223676,
                  'delta30d' => 0.7632739199397801,
                )),
              ),
              16 => 
              array (
                'uuid' => '62c5f14c639e39ab210984ed',
                'symbol' => 'infected_mob',
                'name' => 'Infected Mob',
                'date' => '2022-07-15',
                'image' => 'https://bafybeifqhkedp652y26ks7epgzorf33wktky6e4pf7pn6gfivrd4nkmrs4.ipfs.nftstorage.link/',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 14318.060565563,
                  'value1h' => 3.6,
                  'value1d' => 285.00154016000005,
                  'value7d' => 4599.71717419,
                  'value30d' => 14318.060565563,
                  'prev1h' => 1.7,
                  'prev1d' => 414.55704643999997,
                  'prev7d' => 5942.765917275,
                  'prev30d' => 0,
                  'delta1h' => 2.1176470588235294,
                  'delta1d' => 0.6874844912357536,
                  'delta7d' => 0.04795772610385517,
                  'value1dME' => 283.1086,
                  'value7dME' => 4542.83122231,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 2.1808508916725553,
                  'value1h' => 3.6,
                  'value1d' => 1.4015277227722773,
                  'value7d' => 1.8303107261522966,
                  'value30d' => 2.1808508916725553,
                  'prev1h' => 1.7,
                  'prev1d' => 1.6786825203252032,
                  'prev7d' => 2.533830152955439,
                  'prev30d' => 0,
                  'delta1h' => 2.1176470588235294,
                  'delta1d' => 0.8348974304568121,
                  'delta7d' => 0.5531261521762012,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 1.39,
                  'value1d' => 1,
                  'value7d' => 1,
                  'value30d' => 1,
                  'prev1h' => 1.39,
                  'prev1d' => 1.15,
                  'prev7d' => 1.75,
                  'prev30d' => 0,
                  'delta1h' => 1,
                  'delta1d' => 0.8695652173913044,
                  'delta7d' => 0.5714285714285714,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 14073.030803963,
                  'value1h' => 3.6,
                  'value1d' => 283.1086,
                  'value7d' => 4542.83122231,
                  'value30d' => 14073.030803963,
                  'prev1h' => 1.7,
                  'prev1d' => 412.9559,
                  'prev7d' => 5799.937220115,
                  'prev30d' => 0,
                  'delta1h' => 2.1176470588235294,
                  'delta1d' => 0.6855661827328294,
                  'delta7d' => 0.04881235593691247,
                )),
              ),
              17 => 
              array (
                'uuid' => '62cd3eda7bc3d6b39b5b4990',
                'symbol' => 'eternal_dragons_genesis',
                'name' => 'Eternal Dragons: Genesis',
                'date' => '2022-07-15',
                'image' => 'https://bafybeigerus5ojm3zf3ma2ebmsy5mrhxdsxw6u2blmax326y5p3ahwpieu.ipfs.dweb.link/',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 3930.12886764,
                  'value1h' => 0,
                  'value1d' => 108.27,
                  'value7d' => 3930.12886764,
                  'value30d' => 3930.12886764,
                  'prev1h' => 0,
                  'prev1d' => 372.15,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1d' => 0.2909310761789601,
                  'value1dME' => 108.27,
                  'value7dME' => 3906.923391,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 8.438279462203024,
                  'value1h' => 0,
                  'value1d' => 9.842727272727272,
                  'value7d' => 8.438279462203024,
                  'value30d' => 8.438279462203024,
                  'prev1h' => 0,
                  'prev1d' => 9.793421052631578,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1d' => 1.005034626800044,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 10.1,
                  'value1d' => 9.6,
                  'value7d' => 2.3,
                  'value30d' => 2.3,
                  'prev1h' => 10.1,
                  'prev1d' => 8.25,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 1,
                  'delta1d' => 1.1636363636363636,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 3906.923391,
                  'value1h' => 0,
                  'value1d' => 108.27,
                  'value7d' => 3906.923391,
                  'value30d' => 3906.923391,
                  'prev1h' => 0,
                  'prev1d' => 372.15,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1d' => 0.2909310761789601,
                )),
              ),
              18 => 
              array (
                'uuid' => '62cc6b85639e39ab21225dfb',
                'symbol' => 'dreamers_nft',
                'name' => 'DreamersNFT',
                'date' => '2022-07-15',
                'image' => 'https://bafybeihjyygbvt5zhvrwjnqgx72rqbdk5dhvfqkkky3ynv4r36knmvaf64.ipfs.dweb.link/',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 3786.139776737,
                  'value1h' => 1.25,
                  'value1d' => 143.0673,
                  'value7d' => 3786.139776737,
                  'value30d' => 3786.139776737,
                  'prev1h' => 1.56,
                  'prev1d' => 275.90310942,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 0.8012820512820512,
                  'delta1d' => 0.5185418181794117,
                  'value1dME' => 143.0673,
                  'value7dME' => 3732.035624297,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 0.697446388394132,
                  'value1h' => 0.625,
                  'value1d' => 0.35325259259259256,
                  'value7d' => 0.697446388394132,
                  'value30d' => 0.697446388394132,
                  'prev1h' => 0.312,
                  'prev1d' => 0.46548660827702704,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 2.003205128205128,
                  'delta1d' => 0.7588888408629789,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 0.29,
                  'value1d' => 0.245,
                  'value7d' => 0.06359,
                  'value30d' => 0.06359,
                  'prev1h' => 0.3,
                  'prev1d' => 0.3,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 0.9666666666666667,
                  'delta1d' => 0.8166666666666667,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 3732.035624297,
                  'value1h' => 1.25,
                  'value1d' => 143.0673,
                  'value7d' => 3732.035624297,
                  'value30d' => 3732.035624297,
                  'prev1h' => 1.56,
                  'prev1d' => 275.5680721,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 0.8012820512820512,
                  'delta1d' => 0.5191722644417339,
                )),
              ),
              19 => 
              array (
                'uuid' => '62ac32f1803a14179e68f517',
                'symbol' => 'blocksmith_labs',
                'name' => 'Blocksmith Labs',
                'date' => '2022-07-15',
                'totalItems' => 4444,
                'image' => 'https://dl.airtable.com/.attachmentThumbnails/b1aabaad68ef1a7512de6a0ddd15f38d/47c53a89',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 215804.08642694898,
                  'value1h' => 0,
                  'value1d' => 239.08,
                  'value7d' => 3736.785,
                  'value30d' => 26651.61459,
                  'prev1h' => 0,
                  'prev1d' => 424.14,
                  'prev7d' => 299.75,
                  'prev30d' => 2602.09,
                  'delta1d' => 0.5636818031781959,
                  'delta7d' => 0.7975979983319433,
                  'delta30d' => 0.09187998877825133,
                  'value1dME' => 239.08,
                  'value7dME' => 3736.785,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 33.47967375431384,
                  'value1h' => 0,
                  'value1d' => 59.77,
                  'value7d' => 57.489,
                  'value30d' => 69.22497296103896,
                  'prev1h' => 0,
                  'prev1d' => 60.59142857142857,
                  'prev7d' => 59.95,
                  'prev30d' => 86.73633333333333,
                  'delta1d' => 0.9864431555618428,
                  'delta7d' => 0.9969974979149291,
                  'delta30d' => 0.689099915836885,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 58,
                  'value1d' => 58,
                  'value7d' => 50.99,
                  'value30d' => 49,
                  'prev1h' => 58,
                  'prev1d' => 58.9,
                  'prev7d' => 58.75,
                  'prev30d' => 79,
                  'delta1h' => 1,
                  'delta1d' => 0.9847198641765705,
                  'delta7d' => 0.9872340425531915,
                  'delta30d' => 0.7341772151898734,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 214738.627460169,
                  'value1h' => 0,
                  'value1d' => 239.08,
                  'value7d' => 3736.785,
                  'value30d' => 26651.61459,
                  'prev1h' => 0,
                  'prev1d' => 424.14,
                  'prev7d' => 299.75,
                  'prev30d' => 2602.09,
                  'delta1d' => 0.5636818031781959,
                  'delta7d' => 0.7975979983319433,
                  'delta30d' => 0.09187998877825133,
                )),
              ),
              20 => 
              array (
                'uuid' => '62ac32f8803a14179e693950',
                'symbol' => 'shadowy_super_coder_dao',
                'name' => 'Shadowy Super Coder DAO',
                'date' => '2022-07-15',
                'image' => 'https://i.imgur.com/Hqc29kA.jpg',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 87731.692975048,
                  'value1h' => 0,
                  'value1d' => 130,
                  'value7d' => 3623.08,
                  'value30d' => 12534.32203732,
                  'prev1h' => 0,
                  'prev1d' => 135,
                  'prev7d' => 250,
                  'prev30d' => 390,
                  'delta1d' => 0.9629629629629629,
                  'delta7d' => 0.52,
                  'delta30d' => 0.3333333333333333,
                  'value1dME' => 130,
                  'value7dME' => 3623.08,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 116.17230177866935,
                  'value1h' => 0,
                  'value1d' => 130,
                  'value7d' => 129.3957142857143,
                  'value30d' => 139.14966292134832,
                  'prev1h' => 0,
                  'prev1d' => 135,
                  'prev7d' => 125,
                  'prev30d' => 195,
                  'delta1d' => 0.9629629629629629,
                  'delta7d' => 1.04,
                  'delta30d' => 0.6666666666666666,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 130,
                  'value1d' => 130,
                  'value7d' => 121,
                  'value30d' => 121,
                  'prev1h' => 130,
                  'prev1d' => 141,
                  'prev7d' => 127,
                  'prev30d' => 139,
                  'delta1h' => 1,
                  'delta1d' => 0.9219858156028369,
                  'delta7d' => 1.0236220472440944,
                  'delta30d' => 0.935251798561151,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 86432.19252333,
                  'value1h' => 0,
                  'value1d' => 130,
                  'value7d' => 3623.08,
                  'value30d' => 12384.32,
                  'prev1h' => 0,
                  'prev1d' => 135,
                  'prev7d' => 250,
                  'prev30d' => 390,
                  'delta1d' => 0.9629629629629629,
                  'delta7d' => 0.52,
                  'delta30d' => 0.3333333333333333,
                )),
              ),
              21 => 
              array (
                'uuid' => '62ac32e9803a14179e68946b',
                'symbol' => 'degen_coin_flip',
                'name' => 'Degen Coin Flip',
                'date' => '2022-07-15',
                'image' => 'https://dl.airtable.com/.attachmentThumbnails/5ce514e460b43106e98d6d8b3b1ddd1c/6674e1b7',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 19311.32,
                  'value1h' => 0,
                  'value1d' => 420.69,
                  'value7d' => 3545.38,
                  'value30d' => 7608.28,
                  'prev1h' => 0,
                  'prev1d' => 405,
                  'prev7d' => 369,
                  'prev30d' => 210,
                  'delta1d' => 1.0387407407407407,
                  'delta7d' => 1.1400813008130082,
                  'delta30d' => 2.003285714285714,
                  'value1dME' => 420.69,
                  'value7dME' => 3545.38,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 165.0540170940171,
                  'value1h' => 0,
                  'value1d' => 420.69,
                  'value7d' => 393.93111111111114,
                  'value30d' => 330.79478260869564,
                  'prev1h' => 0,
                  'prev1d' => 405,
                  'prev7d' => 369,
                  'prev30d' => 210,
                  'delta1d' => 1.0387407407407407,
                  'delta7d' => 1.1400813008130082,
                  'delta30d' => 2.003285714285714,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 420,
                  'value1d' => 420.69,
                  'value7d' => 380,
                  'value30d' => 205,
                  'prev1h' => 420,
                  'prev1d' => 420.69,
                  'prev7d' => 389,
                  'prev30d' => 250,
                  'delta1h' => 1,
                  'delta1d' => 1,
                  'delta7d' => 1.08146529562982,
                  'delta30d' => 1.68276,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 19311.32,
                  'value1h' => 0,
                  'value1d' => 420.69,
                  'value7d' => 3545.38,
                  'value30d' => 7608.28,
                  'prev1h' => 0,
                  'prev1d' => 405,
                  'prev7d' => 369,
                  'prev30d' => 210,
                  'delta1d' => 1.0387407407407407,
                  'delta7d' => 1.1400813008130082,
                  'delta30d' => 2.003285714285714,
                )),
              ),
              22 => 
              array (
                'uuid' => '62ac3301803a14179e699d3a',
                'symbol' => 'trippin_ape_tribe',
                'name' => 'Trippin\' Ape Tribe',
                'date' => '2022-07-15',
                'image' => 'https://i.imgur.com/iFgvQva.png',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 507851.732705193,
                  'value1h' => 25.88,
                  'value1d' => 440.42,
                  'value7d' => 3151.3679492799997,
                  'value30d' => 31470.104055327,
                  'prev1h' => 0,
                  'prev1d' => 528.3,
                  'prev7d' => 476.33,
                  'prev30d' => 1829.48741064,
                  'delta1d' => 0.833655120196858,
                  'delta7d' => 0.9246110889509375,
                  'delta30d' => 0.24073409712392074,
                  'value1dME' => 440.42,
                  'value7dME' => 3130.8659,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 48.51613210749518,
                  'value1h' => 12.94,
                  'value1d' => 15.18689655172414,
                  'value7d' => 17.108556830601092,
                  'value30d' => 20.759740181443846,
                  'prev1h' => 0,
                  'prev1d' => 15.538235294117646,
                  'prev7d' => 21.651363636363637,
                  'prev30d' => 20.968835185185185,
                  'delta1d' => 0.9773887616101093,
                  'delta7d' => 0.7014291019627801,
                  'delta30d' => 0.7242603805887092,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 14,
                  'value1d' => 14,
                  'value7d' => 13,
                  'value30d' => 13,
                  'prev1h' => 14,
                  'prev1d' => 13,
                  'prev7d' => 18.9,
                  'prev30d' => 17,
                  'delta1h' => 1,
                  'delta1d' => 1.0769230769230769,
                  'delta7d' => 0.7407407407407408,
                  'delta30d' => 0.8235294117647058,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 447755.383220073,
                  'value1h' => 25.88,
                  'value1d' => 440.42,
                  'value7d' => 3130.8659,
                  'value30d' => 30869.733649807,
                  'prev1h' => 0,
                  'prev1d' => 528.3,
                  'prev7d' => 476.33,
                  'prev30d' => 1698.47565,
                  'delta1d' => 0.833655120196858,
                  'delta7d' => 0.9246110889509375,
                  'delta30d' => 0.2593030992231181,
                )),
              ),
              23 => 
              array (
                'uuid' => '62ac32f7803a14179e692d1e',
                'symbol' => 'justape',
                'name' => 'Just Ape.',
                'date' => '2022-07-15',
                'image' => 'https://bafybeicwsd4if6yxgunl4x4czy3kp2i7fzwppvbkaj4l3touqhjw4z2wfa.ipfs.nftstorage.link/',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 179974.382642168,
                  'value1h' => 0,
                  'value1d' => 366.034,
                  'value7d' => 3093.48926199,
                  'value30d' => 28610.336484516,
                  'prev1h' => 7.8,
                  'prev1d' => 444.724,
                  'prev7d' => 706.30341,
                  'prev30d' => 1775.100736058,
                  'delta1h' => 0,
                  'delta1d' => 0.8230587960173051,
                  'delta7d' => 0.518239038375873,
                  'delta30d' => 0.20620463535655936,
                  'value1dME' => 366.034,
                  'value7dME' => 3093.48926199,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 10.773994934362124,
                  'value1h' => 0,
                  'value1d' => 4.946405405405406,
                  'value7d' => 5.782222919607477,
                  'value30d' => 6.21524870392998,
                  'prev1h' => 7.8,
                  'prev1d' => 5.111770114942528,
                  'prev7d' => 6.663239716981132,
                  'prev30d' => 6.734135769796078,
                  'delta1h' => 0,
                  'delta1d' => 0.9676502061284534,
                  'delta7d' => 0.7423424063221966,
                  'delta30d' => 0.7345271278299742,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 4.48,
                  'value1d' => 4.3,
                  'value7d' => 4.3,
                  'value30d' => 4,
                  'prev1h' => 4.48,
                  'prev1d' => 4.5,
                  'prev7d' => 5.35,
                  'prev30d' => 4.7,
                  'delta1h' => 1,
                  'delta1d' => 0.9555555555555555,
                  'delta7d' => 0.8037383177570093,
                  'delta30d' => 0.9148936170212765,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 163279.893230258,
                  'value1h' => 0,
                  'value1d' => 366.034,
                  'value7d' => 3093.48926199,
                  'value30d' => 28049.417400836,
                  'prev1h' => 7.8,
                  'prev1d' => 444.724,
                  'prev7d' => 706.30341,
                  'prev30d' => 1717.204621298,
                  'delta1h' => 0,
                  'delta1d' => 0.8230587960173051,
                  'delta7d' => 0.518239038375873,
                  'delta30d' => 0.213156891997718,
                )),
              ),
              24 => 
              array (
                'uuid' => '62ac3307803a14179e69d578',
                'symbol' => 'communi3',
                'name' => 'Communi3: Mad Scientists',
                'date' => '2022-07-15',
                'image' => 'https://bafybeifpz2j5oy4e7u2c5vrgnp4grts5sbpjsz2piylgngrmo7wk5xmxw4.ipfs.nftstorage.link/',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 223649.315936244,
                  'value1h' => 0,
                  'value1d' => 148.19,
                  'value7d' => 3018.71,
                  'value30d' => 15685.771,
                  'prev1h' => 0,
                  'prev1d' => 876.4,
                  'prev7d' => 245,
                  'prev30d' => 485.19,
                  'delta1d' => 0.16908945686900959,
                  'delta7d' => 0.6048571428571429,
                  'delta30d' => 0.3054267400399843,
                  'value1dME' => 148.19,
                  'value7dME' => 3018.71,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 37.71755415894213,
                  'value1h' => 0,
                  'value1d' => 37.0475,
                  'value7d' => 33.17263736263736,
                  'value30d' => 37.08220094562648,
                  'prev1h' => 0,
                  'prev1d' => 35.056,
                  'prev7d' => 30.625,
                  'prev30d' => 48.519,
                  'delta1d' => 1.05680910543131,
                  'delta7d' => 1.2097142857142857,
                  'delta30d' => 0.7635668500999608,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 35.5,
                  'value1d' => 35.5,
                  'value7d' => 27,
                  'value30d' => 27,
                  'prev1h' => 35.5,
                  'prev1d' => 31.9,
                  'prev7d' => 30,
                  'prev30d' => 42,
                  'delta1h' => 1,
                  'delta1d' => 1.1128526645768027,
                  'delta7d' => 1.1833333333333333,
                  'delta30d' => 0.8452380952380952,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 213783.096972884,
                  'value1h' => 0,
                  'value1d' => 148.19,
                  'value7d' => 3018.71,
                  'value30d' => 15685.771,
                  'prev1h' => 0,
                  'prev1d' => 876.4,
                  'prev7d' => 245,
                  'prev30d' => 485.19,
                  'delta1d' => 0.16908945686900959,
                  'delta7d' => 0.6048571428571429,
                  'delta30d' => 0.3054267400399843,
                )),
              ),
              25 => 
              array (
                'uuid' => '62ac3307803a14179e69d8e8',
                'symbol' => 'degenerate_ape_academy',
                'name' => 'Degenerate Ape Academy',
                'date' => '2022-07-15',
                'totalItems' => 10009,
                'image' => 'https://bafkreie44hlb5xve225n6p2siebaevxiwha37aefyvs2ul2kx2akalnree.ipfs.nftstorage.link/',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 181719.21324371,
                  'value1h' => 0,
                  'value1d' => 495.68,
                  'value7d' => 2996.15063292,
                  'value30d' => 16400.095883199,
                  'prev1h' => 48,
                  'prev1d' => 429.56,
                  'prev7d' => 378.89,
                  'prev30d' => 655.88,
                  'delta1h' => 0,
                  'delta1d' => 1.1539249464568395,
                  'delta7d' => 1.308242497822587,
                  'delta30d' => 0.7557480026834177,
                  'value1dME' => 495.68,
                  'value7dME' => 2650.46,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 74.64600545990582,
                  'value1h' => 0,
                  'value1d' => 55.07555555555555,
                  'value7d' => 57.61869565217391,
                  'value30d' => 57.700326007326005,
                  'prev1h' => 48,
                  'prev1d' => 53.695,
                  'prev7d' => 54.12714285714286,
                  'prev30d' => 46.848571428571425,
                  'delta1h' => 0,
                  'delta1d' => 1.0257110635171907,
                  'delta7d' => 1.017521942750901,
                  'delta30d' => 1.1756080041742054,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 47,
                  'value1d' => 46.99,
                  'value7d' => 42,
                  'value30d' => 40.99,
                  'prev1h' => 47,
                  'prev1d' => 47.99,
                  'prev7d' => 48.9,
                  'prev30d' => 42,
                  'delta1h' => 1,
                  'delta1d' => 0.9791623254844759,
                  'delta7d' => 0.9609406952965236,
                  'delta30d' => 1.118809523809524,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 128391.129391038,
                  'value1h' => 0,
                  'value1d' => 495.68,
                  'value7d' => 2650.46,
                  'value30d' => 15752.189,
                  'prev1h' => 48,
                  'prev1d' => 429.56,
                  'prev7d' => 378.89,
                  'prev30d' => 655.88,
                  'delta1h' => 0,
                  'delta1d' => 1.1539249464568395,
                  'delta7d' => 1.308242497822587,
                  'delta30d' => 0.7557480026834177,
                )),
              ),
              26 => 
              array (
                'uuid' => '62ac32f0803a14179e68e5d0',
                'symbol' => 'solana_monkey_business',
                'name' => 'Solana Monkey Business',
                'date' => '2022-07-15',
                'image' => 'https://i.imgur.com/bMH6qNc.png',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 90793.17593707799,
                  'value1h' => 0,
                  'value1d' => 390,
                  'value7d' => 2945.69,
                  'value30d' => 29519.20337196,
                  'prev1h' => 0,
                  'prev1d' => 946.69,
                  'prev7d' => 384,
                  'prev30d' => 937,
                  'delta1d' => 0.41196167700091896,
                  'delta7d' => 1.015625,
                  'delta30d' => 0.41622198505869795,
                  'value1dME' => 390,
                  'value7dME' => 2945.69,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 193.61338460677084,
                  'value1h' => 0,
                  'value1d' => 195,
                  'value7d' => 196.37933333333334,
                  'value30d' => 197.13227585517242,
                  'prev1h' => 0,
                  'prev1d' => 189.33800000000002,
                  'prev7d' => 192,
                  'prev30d' => 156.16666666666666,
                  'delta1d' => 1.0299041925022974,
                  'delta7d' => 1.015625,
                  'delta30d' => 1.248665955176094,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 195,
                  'value1d' => 190,
                  'value7d' => 180,
                  'value30d' => 137,
                  'prev1h' => 195,
                  'prev1d' => 180,
                  'prev7d' => 190,
                  'prev30d' => 145,
                  'delta1h' => 1,
                  'delta1d' => 1.0555555555555556,
                  'delta7d' => 1,
                  'delta30d' => 1.3103448275862069,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 74347.539689,
                  'value1h' => 0,
                  'value1d' => 390,
                  'value7d' => 2945.69,
                  'value30d' => 28584.179999,
                  'prev1h' => 0,
                  'prev1d' => 946.69,
                  'prev7d' => 384,
                  'prev30d' => 937,
                  'delta1d' => 0.41196167700091896,
                  'delta7d' => 1.015625,
                  'delta30d' => 0.41622198505869795,
                )),
              ),
              27 => 
              array (
                'uuid' => '62ac32fb803a14179e6955b0',
                'symbol' => 'famous_fox_federation',
                'name' => 'Famous Fox Federation',
                'date' => '2022-07-15',
                'totalItems' => 0,
                'image' => 'https://bafybeiglipep6klutky4atw7jhf7lknpgzbfqlmqmamqh5s6lwih6uopma.ipfs.nftstorage.link/',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 156341.42938325502,
                  'value1h' => 0,
                  'value1d' => 606.18,
                  'value7d' => 2866.3529,
                  'value30d' => 18912.58032732,
                  'prev1h' => 0,
                  'prev1d' => 397.55,
                  'prev7d' => 186.58,
                  'prev30d' => 734.32,
                  'delta1d' => 1.5247893346748835,
                  'delta7d' => 3.248901275592239,
                  'delta30d' => 0.8254984203072229,
                  'value1dME' => 606.18,
                  'value7dME' => 2866.3529,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 26.302502968240063,
                  'value1h' => 0,
                  'value1d' => 27.55363636363636,
                  'value7d' => 30.172135789473682,
                  'value30d' => 34.728004225092256,
                  'prev1h' => 0,
                  'prev1d' => 30.58076923076923,
                  'prev7d' => 31.096666666666668,
                  'prev30d' => 38.64842105263158,
                  'delta1d' => 0.901011879580613,
                  'delta7d' => 0.8860639842524288,
                  'delta30d' => 0.7129304539016924,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 27.49,
                  'value1d' => 25.99,
                  'value7d' => 25.5,
                  'value30d' => 25.5,
                  'prev1h' => 27.49,
                  'prev1d' => 25.5,
                  'prev7d' => 30,
                  'prev30d' => 36,
                  'delta1h' => 1,
                  'delta1d' => 1.0192156862745096,
                  'delta7d' => 0.8663333333333333,
                  'delta30d' => 0.7219444444444444,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 151528.719600031,
                  'value1h' => 0,
                  'value1d' => 606.18,
                  'value7d' => 2866.3529,
                  'value30d' => 18822.57829,
                  'prev1h' => 0,
                  'prev1d' => 397.55,
                  'prev7d' => 186.58,
                  'prev30d' => 734.32,
                  'delta1d' => 1.5247893346748835,
                  'delta7d' => 3.248901275592239,
                  'delta30d' => 0.8254984203072229,
                )),
              ),
              28 => 
              array (
                'uuid' => '62c885fb639e39ab219b84e8',
                'symbol' => 'hoa',
                'name' => 'Heroes Of Astron',
                'date' => '2022-07-15',
                'totalItems' => 0,
                'image' => 'https://creator-hub-prod.s3.us-east-2.amazonaws.com/hoa_pfp_1657465104260.gif',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 2833.5064126089997,
                  'value1h' => 0,
                  'value1d' => 80.2595,
                  'value7d' => 2833.5064126089997,
                  'value30d' => 2833.5064126089997,
                  'prev1h' => 0,
                  'prev1d' => 126.4383,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1d' => 0.6347720587828214,
                  'value1dME' => 80.2595,
                  'value7dME' => 2775.775645849,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 0.5478144159954608,
                  'value1h' => 0,
                  'value1d' => 0.5112070063694267,
                  'value7d' => 0.5478144159954608,
                  'value30d' => 0.5478144159954608,
                  'prev1h' => 0,
                  'prev1d' => 0.5403346153846154,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1d' => 0.94609338697567,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 0.48,
                  'value1d' => 0.35,
                  'value7d' => 0.095,
                  'value30d' => 0.095,
                  'prev1h' => 0.47,
                  'prev1d' => 0.33,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 1.0212765957446808,
                  'delta1d' => 1.0606060606060606,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 2775.775645849,
                  'value1h' => 0,
                  'value1d' => 80.2595,
                  'value7d' => 2775.775645849,
                  'value30d' => 2775.775645849,
                  'prev1h' => 0,
                  'prev1d' => 126.4383,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1d' => 0.6347720587828214,
                )),
              ),
              29 => 
              array (
                'uuid' => '62ac32f0803a14179e68e8e8',
                'symbol' => 'solstein',
                'name' => 'SolStein',
                'date' => '2022-07-15',
                'image' => 'https://i.ibb.co/v3SCHf6/Sol-Stein-500x500.png',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 12402.127068900001,
                  'value1h' => 0,
                  'value1d' => 1112.53,
                  'value7d' => 2827.16514644,
                  'value30d' => 4596.204146440001,
                  'prev1h' => 0,
                  'prev1d' => 1155.73114644,
                  'prev7d' => 89.7,
                  'prev30d' => 16.5,
                  'delta1d' => 0.9626200725202634,
                  'delta7d' => 12.402787068004459,
                  'delta30d' => 67.4260606060606,
                  'value1dME' => 1112.53,
                  'value7dME' => 2804.164,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 11.575020434363296,
                  'value1h' => 0,
                  'value1d' => 20.60240740740741,
                  'value7d' => 20.926597014925374,
                  'value30d' => 17.794564202334634,
                  'prev1h' => 0,
                  'prev1d' => 23.116938775510203,
                  'prev7d' => 17.94,
                  'prev30d' => 8.25,
                  'delta1d' => 0.891225590355127,
                  'delta7d' => 1.1484062100004129,
                  'delta30d' => 2.4972615039281707,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 18,
                  'value1d' => 13.5,
                  'value7d' => 13.5,
                  'value30d' => 7.99,
                  'prev1h' => 18,
                  'prev1d' => 19.65,
                  'prev7d' => 17,
                  'prev30d' => 9,
                  'delta1h' => 1,
                  'delta1d' => 0.6870229007633588,
                  'delta7d' => 0.7941176470588235,
                  'delta30d' => 1.5,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 12362.1218239,
                  'value1h' => 0,
                  'value1d' => 1112.53,
                  'value7d' => 2804.164,
                  'value30d' => 4573.203,
                  'prev1h' => 0,
                  'prev1d' => 1132.73,
                  'prev7d' => 89.7,
                  'prev30d' => 16.5,
                  'delta1d' => 0.9821669771260583,
                  'delta7d' => 12.402787068004459,
                  'delta30d' => 67.4260606060606,
                )),
              ),
              30 => 
              array (
                'uuid' => '62b0afcfb5565b83471934d0',
                'symbol' => 'udder_chaos',
                'name' => 'Udder Chaos',
                'date' => '2022-07-15',
                'totalItems' => 6666,
                'image' => 'https://creator-hub-prod.s3.us-east-2.amazonaws.com/udder_chaos_pfp_1655229269923.gif',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 49622.392736406,
                  'value1h' => 6.75,
                  'value1d' => 241.78004928,
                  'value7d' => 2781.66660304,
                  'value30d' => 49622.392736406,
                  'prev1h' => 9.55,
                  'prev1d' => 267.4969,
                  'prev7d' => 1266.50752532,
                  'prev30d' => 0,
                  'delta1h' => 0.706806282722513,
                  'delta1d' => 0.903861126166322,
                  'delta7d' => 0.1909029709230595,
                  'value1dME' => 236.368,
                  'value7dME' => 2768.25137,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 4.861158985180305,
                  'value1h' => 3.375,
                  'value1d' => 3.527880597014925,
                  'value7d' => 3.8662728631284917,
                  'value30d' => 4.861158985180305,
                  'prev1h' => 3.1833333333333336,
                  'prev1d' => 3.6643410958904106,
                  'prev7d' => 4.409278014184397,
                  'prev30d' => 0,
                  'delta1h' => 1.0602094240837696,
                  'delta1d' => 0.9627598808886741,
                  'delta7d' => 0.8001039139890779,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 3.2,
                  'value1d' => 3.199,
                  'value7d' => 3.09,
                  'value30d' => 2.35,
                  'prev1h' => 3.2,
                  'prev1d' => 3.2,
                  'prev7d' => 3.6,
                  'prev30d' => 0,
                  'delta1h' => 1,
                  'delta1d' => 0.9996875,
                  'delta7d' => 0.888611111111111,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 47882.416004026,
                  'value1h' => 6.75,
                  'value1d' => 236.368,
                  'value7d' => 2768.25137,
                  'value30d' => 47882.416004026,
                  'prev1h' => 9.55,
                  'prev1d' => 267.4969,
                  'prev7d' => 1243.4164,
                  'prev30d' => 0,
                  'delta1h' => 0.706806282722513,
                  'delta1d' => 0.8836289317745365,
                  'delta7d' => 0.19009561077045467,
                )),
              ),
              31 => 
              array (
                'uuid' => '62ac3306803a14179e69cc54',
                'symbol' => 'vandal_city',
                'name' => 'Vandal City',
                'date' => '2022-07-15',
                'image' => 'https://bafkreiavht4btqebnfwh4fsfknt5v3okpyjrcnctnavwppk7kchp5xb6ye.ipfs.nftstorage.link/',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 53002.484085152995,
                  'value1h' => 2.3,
                  'value1d' => 132.722,
                  'value7d' => 2758.875245708,
                  'value30d' => 9715.986303234,
                  'prev1h' => 0,
                  'prev1d' => 198.7690799,
                  'prev7d' => 130.935668914,
                  'prev30d' => 515.20123304,
                  'delta1d' => 0.667719547058184,
                  'delta7d' => 1.013642814832781,
                  'delta30d' => 0.2576119610911248,
                  'value1dME' => 132.722,
                  'value7dME' => 2723.964041588,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 3.8859442744094057,
                  'value1h' => 2.3,
                  'value1d' => 2.3284561403508772,
                  'value7d' => 2.790946763922131,
                  'value30d' => 2.527006380805167,
                  'prev1h' => 0,
                  'prev1d' => 2.722864108219178,
                  'prev7d' => 1.7004632326493505,
                  'prev30d' => 3.329842105263158,
                  'delta1d' => 0.8551495953552183,
                  'delta7d' => 1.3693069603881427,
                  'delta30d' => 0.6992692346194171,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 2.25,
                  'value1d' => 2,
                  'value7d' => 1.67,
                  'value30d' => 1.2,
                  'prev1h' => 2.25,
                  'prev1d' => 1.9,
                  'prev7d' => 1.4,
                  'prev30d' => 2.6,
                  'delta1h' => 1,
                  'delta1d' => 1.0526315789473684,
                  'delta7d' => 1.4285714285714286,
                  'delta30d' => 0.7692307692307692,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 49328.176619353,
                  'value1h' => 2.3,
                  'value1d' => 132.722,
                  'value7d' => 2723.964041588,
                  'value30d' => 9584.935202394,
                  'prev1h' => 0,
                  'prev1d' => 198.7690799,
                  'prev7d' => 130.935668914,
                  'prev30d' => 506.136,
                  'delta1d' => 0.667719547058184,
                  'delta7d' => 1.013642814832781,
                  'delta30d' => 0.26222596298228146,
                )),
              ),
              32 => 
              array (
                'uuid' => '62ac32fa803a14179e694d77',
                'symbol' => 'bubblegoose_ballers',
                'name' => 'Bubblegoose Ballers',
                'date' => '2022-07-15',
                'image' => 'https://dl.airtable.com/.attachmentThumbnails/91673f0315b610cc0d1db91d23ff329a/686f5df0',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 80966.782315256,
                  'value1h' => 12,
                  'value1d' => 417.32204928,
                  'value7d' => 2565.93609928,
                  'value30d' => 30700.717931996,
                  'prev1h' => 0,
                  'prev1d' => 337.587125,
                  'prev7d' => 741.1,
                  'prev30d' => 9226.75126908,
                  'delta1d' => 1.2361906553160165,
                  'delta7d' => 0.5631116573741735,
                  'delta30d' => 0.045229576164960525,
                  'value1dME' => 402.32,
                  'value7dME' => 2550.93405,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 14.059891952146314,
                  'value1h' => 12,
                  'value1d' => 10.58736842105263,
                  'value7d' => 11.595154772727271,
                  'value30d' => 12.245967974060754,
                  'prev1h' => 0,
                  'prev1d' => 10.229912878787879,
                  'prev7d' => 16.46888888888889,
                  'prev30d' => 11.774739633649931,
                  'delta1d' => 1.034942188315792,
                  'delta7d' => 0.6428708392219246,
                  'delta30d' => 0.8991594506935828,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 9,
                  'value1d' => 8,
                  'value7d' => 7.77,
                  'value30d' => 7,
                  'prev1h' => 9,
                  'prev1d' => 8.5,
                  'prev7d' => 9.5,
                  'prev30d' => 7.8,
                  'delta1h' => 1,
                  'delta1d' => 0.9411764705882353,
                  'delta7d' => 0.8421052631578947,
                  'delta30d' => 1.0256410256410258,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 73800.372856816,
                  'value1h' => 12,
                  'value1d' => 402.32,
                  'value7d' => 2550.93405,
                  'value30d' => 30235.294927956,
                  'prev1h' => 0,
                  'prev1d' => 337.587125,
                  'prev7d' => 741.1,
                  'prev30d' => 8677.98311,
                  'delta1d' => 1.1917516107878818,
                  'delta7d' => 0.542868708676292,
                  'delta30d' => 0.04636100288515081,
                )),
              ),
              33 => 
              array (
                'uuid' => '62ac32f2803a14179e68ff72',
                'symbol' => 'galactic_geckos',
                'name' => 'GGSG: Galactic Geckos',
                'date' => '2022-07-15',
                'totalItems' => 0,
                'image' => 'https://i.imgur.com/PfaeoXm.png',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 67315.777394021,
                  'value1h' => 13.45,
                  'value1d' => 538.71,
                  'value7d' => 2393.7623,
                  'value30d' => 8766.35757468,
                  'prev1h' => 12.65,
                  'prev1d' => 624.92,
                  'prev7d' => 334.60614372000003,
                  'prev30d' => 111.89203732,
                  'delta1h' => 1.0632411067193674,
                  'delta1d' => 0.8620463419317674,
                  'delta7d' => 1.6099823930632757,
                  'delta30d' => 4.814551713446271,
                  'value1dME' => 538.71,
                  'value7dME' => 2393.7623,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 12.186846715630082,
                  'value1h' => 13.45,
                  'value1d' => 18.576206896551724,
                  'value7d' => 14.507650303030303,
                  'value30d' => 14.705390969387754,
                  'prev1h' => 12.65,
                  'prev1d' => 16.023589743589742,
                  'prev7d' => 12.436538461538463,
                  'prev30d' => 9.689,
                  'delta1h' => 1.0632411067193674,
                  'delta1d' => 1.1593037012185836,
                  'delta7d' => 1.4936798494211991,
                  'delta30d' => 1.917247073645549,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 13.49,
                  'value1d' => 12.65,
                  'value7d' => 9,
                  'value30d' => 8,
                  'prev1h' => 13.45,
                  'prev1d' => 10.5,
                  'prev7d' => 9.99,
                  'prev30d' => 8.3,
                  'delta1h' => 1.0029739776951674,
                  'delta1d' => 1.2047619047619047,
                  'delta7d' => 1.2662662662662663,
                  'delta30d' => 1.5240963855421685,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 59630.240979578,
                  'value1h' => 13.45,
                  'value1d' => 538.71,
                  'value7d' => 2393.7623,
                  'value30d' => 8646.76989,
                  'prev1h' => 12.65,
                  'prev1d' => 624.92,
                  'prev7d' => 323.35,
                  'prev30d' => 96.89,
                  'delta1h' => 1.0632411067193674,
                  'delta1d' => 0.8620463419317674,
                  'delta7d' => 1.6660275243544147,
                  'delta30d' => 5.5600165135720925,
                )),
              ),
              34 => 
              array (
                'uuid' => '62c34c40451b98e7db6e21df',
                'symbol' => 'aidegens',
                'name' => 'AI Degens',
                'date' => '2022-07-15',
                'totalItems' => 3333,
                'image' => 'https://creator-hub-prod.s3.us-east-2.amazonaws.com/aidegens_pfp_1656525051860.png',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 7183.809561553,
                  'value1h' => 2.29,
                  'value1d' => 548.38912788,
                  'value7d' => 2362.063856306,
                  'value30d' => 7183.809561553,
                  'prev1h' => 4.19,
                  'prev1d' => 154.277007105,
                  'prev7d' => 1682.41496831,
                  'prev30d' => 0,
                  'delta1h' => 0.5465393794749402,
                  'delta1d' => 3.554574580946918,
                  'delta7d' => 0.325953547852027,
                  'value1dME' => 540.82159,
                  'value7dME' => 2325.395834986,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 0.9221979155378709,
                  'value1h' => 2.29,
                  'value1d' => 1.7731855409836066,
                  'value7d' => 1.26106064804013,
                  'value30d' => 0.9221979155378709,
                  'prev1h' => 2.095,
                  'prev1d' => 1.0702381925704225,
                  'prev7d' => 2.2856722963823937,
                  'prev30d' => 0,
                  'delta1h' => 1.0930787589498805,
                  'delta1d' => 1.6568139254355096,
                  'delta7d' => 0.7757829255707758,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 2.15,
                  'value1d' => 1,
                  'value7d' => 0.55,
                  'value30d' => 0.0789,
                  'prev1h' => 2.04,
                  'prev1d' => 0.75,
                  'prev7d' => 1.39,
                  'prev30d' => 0,
                  'delta1h' => 1.053921568627451,
                  'delta1d' => 1.3333333333333333,
                  'delta7d' => 0.7194244604316548,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 7086.168782993,
                  'value1h' => 2.29,
                  'value1d' => 540.82159,
                  'value7d' => 2325.395834986,
                  'value30d' => 7086.168782993,
                  'prev1h' => 4.19,
                  'prev1d' => 151.973823345,
                  'prev7d' => 1661.68375947,
                  'prev30d' => 0,
                  'delta1h' => 0.5465393794749402,
                  'delta1d' => 3.5586496285762705,
                  'delta7d' => 0.32546601416655657,
                )),
              ),
              35 => 
              array (
                'uuid' => '62c99e8c639e39ab21e65ba3',
                'symbol' => 'zeninaio',
                'name' => 'Zenin',
                'date' => '2022-07-15',
                'totalItems' => 1464,
                'image' => 'https://creator-hub-prod.s3.us-east-2.amazonaws.com/zeninaio_pfp_1657378957487.png',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 2301.443088647,
                  'value1h' => 1.2,
                  'value1d' => 206.07269,
                  'value7d' => 2301.443088647,
                  'value30d' => 2301.443088647,
                  'prev1h' => 0,
                  'prev1d' => 221.29494928,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1d' => 0.9312128029603622,
                  'value1dME' => 206.07269,
                  'value7dME' => 2243.926257887,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 1.3989565198796756,
                  'value1h' => 1.2,
                  'value1d' => 1.6891204098360655,
                  'value7d' => 1.3989565198796756,
                  'value30d' => 1.3989565198796756,
                  'prev1h' => 0,
                  'prev1d' => 1.8490846153846152,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1d' => 0.9134900565297945,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 1.55,
                  'value1d' => 1.2,
                  'value7d' => 0.55,
                  'value30d' => 0.55,
                  'prev1h' => 1.55,
                  'prev1d' => 1.25,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 1,
                  'delta1d' => 0.96,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 2243.926257887,
                  'value1h' => 1.2,
                  'value1d' => 206.07269,
                  'value7d' => 2243.926257887,
                  'value30d' => 2243.926257887,
                  'prev1h' => 0,
                  'prev1d' => 216.3429,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1d' => 0.9525280931336318,
                )),
              ),
              36 => 
              array (
                'uuid' => '62bb2af3970eaa81c0734e91',
                'symbol' => 'sphynx_underground_society',
                'name' => 'Sphynx Underground Society',
                'date' => '2022-07-15',
                'image' => 'https://dl.airtable.com/.attachmentThumbnails/3605c3a23138c1ef8d9eb70b48f21d2f/778df577',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 35249.547598763995,
                  'value1h' => 1.2,
                  'value1d' => 260.73870145899997,
                  'value7d' => 2293.60504797,
                  'value30d' => 35249.547598763995,
                  'prev1h' => 16.08,
                  'prev1d' => 136.11026203999998,
                  'prev7d' => 1087.97442164,
                  'prev30d' => 0,
                  'delta1h' => 0.0746268656716418,
                  'delta1d' => 1.9156432259484908,
                  'delta7d' => 0.23965517596081487,
                  'value1dME' => 257.036664139,
                  'value7dME' => 2247.79455981,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 2.7625885132684096,
                  'value1h' => 1.2,
                  'value1d' => 1.412289363401099,
                  'value7d' => 1.5126477522274562,
                  'value30d' => 2.7625885132684096,
                  'prev1h' => 2.01,
                  'prev1d' => 1.286316425904762,
                  'prev7d' => 2.0203140922264153,
                  'prev30d' => 0,
                  'delta1h' => 0.5970149253731344,
                  'delta1d' => 1.0979330862604284,
                  'delta7d' => 0.6990444549365765,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 1.19,
                  'value1d' => 0.9,
                  'value7d' => 0.7,
                  'value30d' => 0.7,
                  'prev1h' => 1.2,
                  'prev1d' => 0.89,
                  'prev7d' => 1.34,
                  'prev30d' => 0,
                  'delta1h' => 0.9916666666666667,
                  'delta1d' => 1.0112359550561798,
                  'delta7d' => 0.6716417910447761,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 34438.428406404,
                  'value1h' => 1.2,
                  'value1d' => 257.036664139,
                  'value7d' => 2247.79455981,
                  'value30d' => 34438.428406404,
                  'prev1h' => 16.08,
                  'prev1d' => 135.06322472,
                  'prev7d' => 1070.76646888,
                  'prev30d' => 0,
                  'delta1h' => 0.0746268656716418,
                  'delta1d' => 1.9030840161847424,
                  'delta7d' => 0.24004922792161684,
                )),
              ),
              37 => 
              array (
                'uuid' => '62caff25639e39ab217c71fc',
                'symbol' => 'maskedapedao',
                'name' => 'Masked Ape DAO',
                'date' => '2022-07-15',
                'totalItems' => 0,
                'image' => 'https://creator-hub-prod.s3.us-east-2.amazonaws.com/maskedapedao_pfp_1657278454181.png',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 2278.453612144,
                  'value1h' => 3.469,
                  'value1d' => 820.40046435,
                  'value7d' => 2278.453612144,
                  'value30d' => 2278.453612144,
                  'prev1h' => 12.90114644,
                  'prev1d' => 185.73629936,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 0.2688908319995785,
                  'delta1d' => 4.417017390660259,
                  'value1dME' => 797.45940899,
                  'value7dME' => 2230.258346744,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 0.3114885959139665,
                  'value1h' => 0.6938,
                  'value1d' => 0.6645495074916667,
                  'value7d' => 0.3114885959139665,
                  'value30d' => 0.3114885959139665,
                  'prev1h' => 0.7625,
                  'prev1d' => 0.318176350174216,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 0.9099016393442623,
                  'delta1d' => 2.0886200596863835,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 0.65,
                  'value1d' => 0.045,
                  'value7d' => 0.01,
                  'value30d' => 0.01,
                  'prev1h' => 0.55,
                  'prev1d' => 0.01,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 1.1818181818181817,
                  'delta1d' => 4.5,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 2230.258346744,
                  'value1h' => 3.469,
                  'value1d' => 797.45940899,
                  'value7d' => 2230.258346744,
                  'value30d' => 2230.258346744,
                  'prev1h' => 12.2,
                  'prev1d' => 182.633225,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 0.284344262295082,
                  'delta1d' => 4.36645308645237,
                )),
              ),
              38 => 
              array (
                'uuid' => '62ac32f5803a14179e691657',
                'symbol' => 'stoned_ape_crew',
                'name' => 'Stoned Ape Crew',
                'date' => '2022-07-15',
                'image' => 'https://dl.airtable.com/.attachmentThumbnails/483970a827af847e0b031c7d90d70baf/6cc644f1',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 103854.457748082,
                  'value1h' => 0,
                  'value1d' => 201.7,
                  'value7d' => 2151.22,
                  'value30d' => 11596.697353,
                  'prev1h' => 0,
                  'prev1d' => 400.75,
                  'prev7d' => 696.83,
                  'prev30d' => 689.69,
                  'delta1d' => 0.5033063006862133,
                  'delta7d' => 0.2894536687570856,
                  'delta30d' => 0.29245023126332115,
                  'value1dME' => 201.7,
                  'value7dME' => 2151.22,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 63.98043259945635,
                  'value1h' => 0,
                  'value1d' => 28.814285714285713,
                  'value7d' => 28.68293333333333,
                  'value30d' => 34.824916975975974,
                  'prev1h' => 0,
                  'prev1d' => 28.625,
                  'prev7d' => 27.8732,
                  'prev30d' => 45.97933333333334,
                  'delta1d' => 1.0066126013724266,
                  'delta7d' => 1.0337631027038774,
                  'delta30d' => 0.626679066992831,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 28.4201,
                  'value1d' => 26.9,
                  'value7d' => 24.4,
                  'value30d' => 24.4,
                  'prev1h' => 28.4201,
                  'prev1d' => 24.5,
                  'prev7d' => 24.4,
                  'prev30d' => 41,
                  'delta1h' => 1,
                  'delta1d' => 1.0979591836734692,
                  'delta7d' => 1.1024590163934427,
                  'delta30d' => 0.6560975609756097,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 103328.398648122,
                  'value1h' => 0,
                  'value1d' => 201.7,
                  'value7d' => 2151.22,
                  'value30d' => 11596.697353,
                  'prev1h' => 0,
                  'prev1d' => 400.75,
                  'prev7d' => 696.83,
                  'prev30d' => 689.69,
                  'delta1d' => 0.5033063006862133,
                  'delta7d' => 0.2894536687570856,
                  'delta30d' => 0.29245023126332115,
                )),
              ),
              39 => 
              array (
                'uuid' => '62ce1f1c4725bcd0caa2f1ce',
                'symbol' => 'the_nobunagas',
                'name' => 'The Nobunagas',
                'date' => '2022-07-15',
                'totalItems' => 6969,
                'image' => 'https://creator-hub-prod.s3.us-east-2.amazonaws.com/the_nobunagas_pfp_1657615393256.png',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 2075.703178097,
                  'value1h' => 10.89214644,
                  'value1d' => 395.17061836,
                  'value7d' => 2075.703178097,
                  'value30d' => 2075.703178097,
                  'prev1h' => 26.818537319999997,
                  'prev1d' => 1516.520468779,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 0.4061424495316212,
                  'delta1d' => 0.2605771741928183,
                  'value1dME' => 388.12439,
                  'value7dME' => 2025.547461337,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 0.282818690496649,
                  'value1h' => 0.23110869565217393,
                  'value1d' => 0.3280848605240913,
                  'value7d' => 0.282818690496649,
                  'value30d' => 0.282818690496649,
                  'prev1h' => 0.17497697368421053,
                  'prev1d' => 0.32721371531441823,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 1.3207949068159508,
                  'delta1d' => 1.0026623126381973,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 0.194,
                  'value1d' => 0.1,
                  'value7d' => 0.04,
                  'value30d' => 0.04,
                  'prev1h' => 0.1,
                  'prev1d' => 0.131,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 1.94,
                  'delta1d' => 0.7633587786259542,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 2025.547461337,
                  'value1h' => 10.631,
                  'value1d' => 388.12439,
                  'value7d' => 2025.547461337,
                  'value30d' => 2025.547461337,
                  'prev1h' => 26.5965,
                  'prev1d' => 1481.950916659,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 0.39971424811535355,
                  'delta1d' => 0.261900975016778,
                )),
              ),
              40 => 
              array (
                'uuid' => '62ac32f6803a14179e692a83',
                'symbol' => 'genesis_genopets_habitats',
                'name' => 'Genesis Genopet Habitats',
                'date' => '2022-07-15',
                'totalItems' => 3977,
                'image' => 'https://creator-hub-prod.s3.us-east-2.amazonaws.com/genesis_genopets_habitats_pfp_1649105768353.gif',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 113372.876039359,
                  'value1h' => 0,
                  'value1d' => 368.57,
                  'value7d' => 2036.1,
                  'value30d' => 17882.3861,
                  'prev1h' => 0,
                  'prev1d' => 231.5,
                  'prev7d' => 105.5,
                  'prev30d' => 1227.49203732,
                  'delta1d' => 1.5920950323974081,
                  'delta7d' => 3.493554502369668,
                  'delta30d' => 0.3002626402405867,
                  'value1dME' => 368.57,
                  'value7dME' => 2036.1,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 44.59599197605746,
                  'value1h' => 0,
                  'value1d' => 46.07125,
                  'value7d' => 47.35116279069767,
                  'value30d' => 59.40992059800664,
                  'prev1h' => 0,
                  'prev1d' => 46.3,
                  'prev7d' => 52.75,
                  'prev30d' => 64.94388888888889,
                  'delta1d' => 0.9950593952483802,
                  'delta7d' => 0.873388625592417,
                  'delta30d' => 0.709400850306675,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 47,
                  'value1d' => 45.44,
                  'value7d' => 35,
                  'value30d' => 35,
                  'prev1h' => 47,
                  'prev1d' => 43,
                  'prev7d' => 50.9,
                  'prev30d' => 58.7,
                  'delta1h' => 1,
                  'delta1d' => 1.0567441860465117,
                  'delta7d' => 0.8927308447937131,
                  'delta30d' => 0.7741056218057921,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 111757.555892,
                  'value1h' => 0,
                  'value1d' => 368.57,
                  'value7d' => 2036.1,
                  'value30d' => 17882.3861,
                  'prev1h' => 0,
                  'prev1d' => 231.5,
                  'prev7d' => 105.5,
                  'prev30d' => 1168.99,
                  'delta1d' => 1.5920950323974081,
                  'delta7d' => 3.493554502369668,
                  'delta30d' => 0.31528926680296665,
                )),
              ),
              41 => 
              array (
                'uuid' => '62ac32f5803a14179e69163b',
                'symbol' => 'stepn',
                'name' => 'STEPN',
                'date' => '2022-07-15',
                'image' => 'https://dl.airtable.com/.attachmentThumbnails/d5c12b4eb46e676d72569a2084345c94/6ef0628f',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 45199.678027676,
                  'value1h' => 0,
                  'value1d' => 28.56795,
                  'value7d' => 2033.6455905169998,
                  'value30d' => 3204.228092194,
                  'prev1h' => 0,
                  'prev1d' => 101.818,
                  'prev7d' => 223.46203732,
                  'prev30d' => 155.19898944,
                  'delta1d' => 0.28057858139032393,
                  'delta7d' => 0.12784252011043107,
                  'delta30d' => 0.18407304134570016,
                  'value1dME' => 28.56795,
                  'value7dME' => 2011.133568437,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 10.889628706892069,
                  'value1h' => 0,
                  'value1d' => 4.081135714285714,
                  'value7d' => 7.157058962409252,
                  'value30d' => 5.297504144393278,
                  'prev1h' => 0,
                  'prev1d' => 4.628090909090909,
                  'prev7d' => 3.841578947368421,
                  'prev30d' => 4.312709677419354,
                  'delta1d' => 0.8818183986553038,
                  'delta7d' => 1.0623589337091186,
                  'delta30d' => 0.9463043004387418,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 2.13,
                  'value1d' => 2.13,
                  'value7d' => 1.91,
                  'value30d' => 1.4,
                  'prev1h' => 2.13,
                  'prev1d' => 2.06,
                  'prev7d' => 1.4,
                  'prev30d' => 3.8,
                  'delta1h' => 1,
                  'delta1d' => 1.0339805825242718,
                  'delta7d' => 1.5214285714285714,
                  'delta30d' => 0.5605263157894737,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 44897.939158516,
                  'value1h' => 0,
                  'value1d' => 28.56795,
                  'value7d' => 2011.133568437,
                  'value30d' => 3152.014965914,
                  'prev1h' => 0,
                  'prev1d' => 101.818,
                  'prev7d' => 218.97,
                  'prev30d' => 133.694,
                  'delta1d' => 0.28057858139032393,
                  'delta7d' => 0.13046513220989175,
                  'delta30d' => 0.213681616228103,
                )),
              ),
              42 => 
              array (
                'uuid' => '62ac32ec803a14179e68b760',
                'symbol' => 'the_catalina_whale_mixer',
                'name' => 'The Catalina Whale Mixer',
                'date' => '2022-07-15',
                'image' => 'https://bafkreicadecx3rbffm6tqtgtc67bi6r2xiibtmawcejje7pfu7id2zxwwy.ipfs.nftstorage.link/',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 121545.771325426,
                  'value1h' => 47.5,
                  'value1d' => 351.22,
                  'value7d' => 2032.58,
                  'value30d' => 18483.26394016,
                  'prev1h' => 0,
                  'prev1d' => 280.89,
                  'prev7d' => 330.08,
                  'prev30d' => 1294.33594016,
                  'delta1d' => 1.2503827120937023,
                  'delta7d' => 1.064045079980611,
                  'delta30d' => 0.2713515008758729,
                  'value1dME' => 351.22,
                  'value7dME' => 2032.58,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 47.04575475229603,
                  'value1h' => 47.5,
                  'value1d' => 50.174285714285716,
                  'value7d' => 45.16844444444444,
                  'value30d' => 60.72033333333333,
                  'prev1h' => 0,
                  'prev1d' => 46.815,
                  'prev7d' => 55.01333333333333,
                  'prev30d' => 72.7254705882353,
                  'delta1d' => 1.0717566103660305,
                  'delta7d' => 0.9120386399833808,
                  'delta30d' => 0.6899135242227273,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 48,
                  'value1d' => 47.5,
                  'value7d' => 35,
                  'value30d' => 35,
                  'prev1h' => 48,
                  'prev1d' => 44,
                  'prev7d' => 43,
                  'prev30d' => 65,
                  'delta1h' => 1,
                  'delta1d' => 1.0795454545454546,
                  'delta7d' => 1.1046511627906976,
                  'delta30d' => 0.7307692307692307,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 117285.066597474,
                  'value1h' => 47.5,
                  'value1d' => 351.22,
                  'value7d' => 2032.58,
                  'value30d' => 18398.261,
                  'prev1h' => 0,
                  'prev1d' => 280.89,
                  'prev7d' => 330.08,
                  'prev30d' => 1236.333,
                  'delta1d' => 1.2503827120937023,
                  'delta7d' => 1.064045079980611,
                  'delta30d' => 0.2840820393858289,
                )),
              ),
              43 => 
              array (
                'uuid' => '62ac32ec803a14179e68b69c',
                'symbol' => 'taiyo_robotics',
                'name' => 'Taiyo Robotics',
                'date' => '2022-07-15',
                'image' => 'https://dl.airtable.com/.attachmentThumbnails/72a25e9d4d6f89582ebddb4e17aad0e6/bd10fa1b',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 78614.87002323999,
                  'value1h' => 0,
                  'value1d' => 135,
                  'value7d' => 1919.00140896,
                  'value30d' => 9597.38281792,
                  'prev1h' => 0,
                  'prev1d' => 0,
                  'prev7d' => 135,
                  'prev30d' => 574,
                  'delta7d' => 1,
                  'delta30d' => 0.23519163763066203,
                  'value1dME' => 135,
                  'value7dME' => 1789,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 138.42505685071572,
                  'value1h' => 0,
                  'value1d' => 135,
                  'value7d' => 137.6153846153846,
                  'value30d' => 124.30253333333334,
                  'prev1h' => 0,
                  'prev1d' => 0,
                  'prev7d' => 135,
                  'prev30d' => 114.8,
                  'delta7d' => 1,
                  'delta30d' => 1.17595818815331,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 134,
                  'value1d' => 134,
                  'value7d' => 134,
                  'value30d' => 105,
                  'prev1h' => 134,
                  'prev1d' => 139.5,
                  'prev7d' => 130,
                  'prev30d' => 110,
                  'delta1h' => 1,
                  'delta1d' => 1.0307692307692307,
                  'delta7d' => 1.0307692307692307,
                  'delta30d' => 1.2181818181818183,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 67689.8528,
                  'value1h' => 0,
                  'value1d' => 135,
                  'value7d' => 1789,
                  'value30d' => 9322.69,
                  'prev1h' => 0,
                  'prev1d' => 0,
                  'prev7d' => 135,
                  'prev30d' => 574,
                  'delta7d' => 1,
                  'delta30d' => 0.23519163763066203,
                )),
              ),
              44 => 
              array (
                'uuid' => '62ac3306803a14179e69cb8a',
                'symbol' => 'transdimensional_fox_federation',
                'name' => 'Transdimensional Fox Federation',
                'date' => '2022-07-15',
                'image' => 'https://bafkreiaw7wgcu3o7xwmm3mbmm65pco5nti7etquvp7xlo6atgbksirb2va.ipfs.nftstorage.link/',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 47290.348119966,
                  'value1h' => 7.83,
                  'value1d' => 270.097381838,
                  'value7d' => 1886.661209158,
                  'value30d' => 10621.855154609,
                  'prev1h' => 23.438383838,
                  'prev1d' => 201.92389,
                  'prev7d' => 261.657,
                  'prev30d' => 481.689,
                  'delta1h' => 0.33406740217751013,
                  'delta1d' => 1.3376197429536445,
                  'delta7d' => 1.032257427999251,
                  'delta30d' => 0.5607298108073882,
                  'value1dME' => 270.097381838,
                  'value7dME' => 1878.419171838,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 6.8729367369504475,
                  'value1h' => 7.83,
                  'value1d' => 7.944040642294118,
                  'value7d' => 8.202703807152838,
                  'value30d' => 8.5940875373309,
                  'prev1h' => 7.812794612666667,
                  'prev1d' => 8.0769556,
                  'prev7d' => 8.7219,
                  'prev30d' => 8.601589285714287,
                  'delta1h' => 1.0022022065325304,
                  'delta1d' => 0.9835439286423857,
                  'delta7d' => 0.9108153776463979,
                  'delta30d' => 0.9235549825062863,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 7.83,
                  'value1d' => 7,
                  'value7d' => 7,
                  'value30d' => 7,
                  'prev1h' => 7.82,
                  'prev1d' => 7.55,
                  'prev7d' => 8.19,
                  'prev30d' => 7.7,
                  'delta1h' => 1.0012787723785166,
                  'delta1d' => 0.9271523178807948,
                  'delta7d' => 0.8547008547008548,
                  'delta30d' => 0.9090909090909091,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 46880.301482739,
                  'value1h' => 7.83,
                  'value1d' => 270.097381838,
                  'value7d' => 1878.419171838,
                  'value30d' => 10596.509933529,
                  'prev1h' => 23.438383838,
                  'prev1d' => 201.92389,
                  'prev7d' => 261.657,
                  'prev30d' => 481.689,
                  'delta1h' => 0.33406740217751013,
                  'delta1d' => 1.3376197429536445,
                  'delta7d' => 1.032257427999251,
                  'delta30d' => 0.5607298108073882,
                )),
              ),
              45 => 
              array (
                'uuid' => '62ac3302803a14179e69a2a9',
                'symbol' => 'aurory',
                'name' => 'Aurory',
                'date' => '2022-07-15',
                'totalItems' => 10002,
                'image' => 'https://arweave.net/XnmNKTJOthZ1PcqSspYLPTjFHGJRCe-lGrapzNM0VVQ',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 114538.726827755,
                  'value1h' => 0,
                  'value1d' => 290.99,
                  'value7d' => 1756.52204428,
                  'value30d' => 10333.498018758999,
                  'prev1h' => 0,
                  'prev1d' => 371.27,
                  'prev7d' => 273.37,
                  'prev30d' => 380.01639328,
                  'delta1d' => 0.7837692245535595,
                  'delta7d' => 1.064454768262794,
                  'delta30d' => 0.7657301241359753,
                  'value1dME' => 290.99,
                  'value7dME' => 1720.53,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 43.80825389588,
                  'value1h' => 0,
                  'value1d' => 36.37375,
                  'value7d' => 36.607021276595745,
                  'value30d' => 39.96098360655738,
                  'prev1h' => 0,
                  'prev1d' => 33.75181818181818,
                  'prev7d' => 34.17125,
                  'prev30d' => 39.166666666666664,
                  'delta1d' => 1.0776826837611442,
                  'delta7d' => 1.064454768262794,
                  'delta30d' => 0.9286914893617022,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 34.75,
                  'value1d' => 33.4,
                  'value7d' => 32,
                  'value30d' => 32,
                  'prev1h' => 34.75,
                  'prev1d' => 34,
                  'prev7d' => 34,
                  'prev30d' => 39.5,
                  'delta1h' => 1,
                  'delta1d' => 0.9823529411764705,
                  'delta7d' => 0.9823529411764705,
                  'delta30d' => 0.8455696202531645,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 72283.618928202,
                  'value1h' => 0,
                  'value1d' => 290.99,
                  'value7d' => 1720.53,
                  'value30d' => 9750.48,
                  'prev1h' => 0,
                  'prev1d' => 371.27,
                  'prev7d' => 273.37,
                  'prev30d' => 235,
                  'delta1d' => 0.7837692245535595,
                  'delta7d' => 1.064454768262794,
                  'delta30d' => 1.2382553191489363,
                )),
              ),
              46 => 
              array (
                'uuid' => '62ac32f8803a14179e6936b8',
                'symbol' => 'rascals',
                'name' => 'Jelly Rascals',
                'date' => '2022-07-15',
                'totalItems' => 6666,
                'image' => 'https://creator-hub-prod.s3.us-east-2.amazonaws.com/rascals_pfp_1653133332626.png',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 11571.457,
                  'value1h' => 0,
                  'value1d' => 248.7,
                  'value7d' => 1749.181,
                  'value30d' => 6343.5,
                  'prev1h' => 0,
                  'prev1d' => 172.42,
                  'prev7d' => 163.44,
                  'prev30d' => 123.19,
                  'delta1d' => 1.442408073309361,
                  'delta7d' => 1.5216593245227605,
                  'delta30d' => 2.0188326974592092,
                  'value1dME' => 248.7,
                  'value7dME' => 1749.181,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 17.72045482388974,
                  'value1h' => 0,
                  'value1d' => 11.304545454545455,
                  'value7d' => 12.405539007092198,
                  'value30d' => 15.06769596199525,
                  'prev1h' => 0,
                  'prev1d' => 13.263076923076921,
                  'prev7d' => 12.572307692307692,
                  'prev30d' => 20.531666666666666,
                  'delta1d' => 0.8523320433191679,
                  'delta7d' => 0.8991623281270859,
                  'delta30d' => 0.5505907356706935,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 11.5,
                  'value1d' => 9.6,
                  'value7d' => 9.6,
                  'value30d' => 9.6,
                  'prev1h' => 11.5,
                  'prev1d' => 11.8,
                  'prev7d' => 11,
                  'prev30d' => 20,
                  'delta1h' => 1,
                  'delta1d' => 0.8135593220338982,
                  'delta7d' => 0.8727272727272727,
                  'delta30d' => 0.48,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 11571.457,
                  'value1h' => 0,
                  'value1d' => 248.7,
                  'value7d' => 1749.181,
                  'value30d' => 6343.5,
                  'prev1h' => 0,
                  'prev1d' => 172.42,
                  'prev7d' => 163.44,
                  'prev30d' => 123.19,
                  'delta1d' => 1.442408073309361,
                  'delta7d' => 1.5216593245227605,
                  'delta30d' => 2.0188326974592092,
                )),
              ),
              47 => 
              array (
                'uuid' => '62ac32f3803a14179e690631',
                'symbol' => 'magicticket',
                'name' => 'Magic Ticket',
                'date' => '2022-07-15',
                'image' => 'https://ipfs.io/ipfs/bafybeibimlad5fzgsvo2hzvtb6h2ayqi6kncr665mddylf6crvjpc2l7s4',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 73475.99346502901,
                  'value1h' => 3.69,
                  'value1d' => 204.8073999,
                  'value7d' => 1707.0536441699999,
                  'value30d' => 20357.615578788,
                  'prev1h' => 1.78,
                  'prev1d' => 228.236,
                  'prev7d' => 259.9008,
                  'prev30d' => 272.409,
                  'delta1h' => 2.0730337078651684,
                  'delta1d' => 0.8973492345642231,
                  'delta7d' => 0.7880214293299598,
                  'delta30d' => 0.751837861083885,
                  'value1dME' => 204.8073999,
                  'value7dME' => 1705.11159989,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 1.608745494665812,
                  'value1h' => 1.845,
                  'value1d' => 2.3012067404494383,
                  'value7d' => 2.9398475860172413,
                  'value30d' => 3.1440019323935546,
                  'prev1h' => 1.78,
                  'prev1d' => 3.0031052631578947,
                  'prev7d' => 3.0221023255813955,
                  'prev30d' => 1.5837732558139535,
                  'delta1h' => 1.0365168539325842,
                  'delta1d' => 0.7662757508638309,
                  'delta7d' => 0.7614589092401858,
                  'delta30d' => 1.4529900236677327,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 1.89,
                  'value1d' => 1.65,
                  'value7d' => 1.4,
                  'value30d' => 0.88,
                  'prev1h' => 1.78,
                  'prev1d' => 1.82,
                  'prev7d' => 1.8,
                  'prev30d' => 0.78,
                  'delta1h' => 1.0617977528089888,
                  'delta1d' => 0.9065934065934065,
                  'delta7d' => 0.9166666666666666,
                  'delta30d' => 2.1153846153846154,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 73392.578212149,
                  'value1h' => 3.69,
                  'value1d' => 204.8073999,
                  'value7d' => 1705.11159989,
                  'value30d' => 20291.388471668,
                  'prev1h' => 1.78,
                  'prev1d' => 228.236,
                  'prev7d' => 259.9008,
                  'prev30d' => 272.409,
                  'delta1h' => 2.0730337078651684,
                  'delta1d' => 0.8973492345642231,
                  'delta7d' => 0.7880214293299598,
                  'delta30d' => 0.751837861083885,
                )),
              ),
              48 => 
              array (
                'uuid' => '62c2185c451b98e7db0fbe50',
                'symbol' => 'gothic_ghosts',
                'name' => 'Gothic Ghosts',
                'date' => '2022-07-15',
                'totalItems' => 2000,
                'image' => 'https://creator-hub-prod.s3.us-east-2.amazonaws.com/ghotic_ghosts_pfp_1656795704038.png',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 3196.632496358,
                  'value1h' => 5.1,
                  'value1d' => 120.4,
                  'value7d' => 1668.291410074,
                  'value30d' => 3196.632496358,
                  'prev1h' => 8.97,
                  'prev1d' => 420.64864259,
                  'prev7d' => 369.488,
                  'prev30d' => 0,
                  'delta1h' => 0.568561872909699,
                  'delta1d' => 0.28622462504259666,
                  'delta7d' => 0.3258563200969991,
                  'value1dME' => 120.4,
                  'value7dME' => 1655.386177034,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 3.9967840471097102,
                  'value1h' => 2.55,
                  'value1d' => 3.254054054054054,
                  'value7d' => 4.402622811260638,
                  'value30d' => 3.9967840471097102,
                  'prev1h' => 2.2425,
                  'prev1d' => 4.622512555934066,
                  'prev7d' => 4.45166265060241,
                  'prev30d' => 0,
                  'delta1h' => 1.137123745819398,
                  'delta1d' => 0.7039578615912512,
                  'delta7d' => 0.7309749883257006,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 2.4,
                  'value1d' => 2.1,
                  'value7d' => 2.1,
                  'value30d' => 1.399,
                  'prev1h' => 2.1,
                  'prev1d' => 3.9,
                  'prev7d' => 3.5,
                  'prev30d' => 0,
                  'delta1h' => 1.1428571428571428,
                  'delta1d' => 0.5384615384615385,
                  'delta7d' => 0.6,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 3169.449749358,
                  'value1h' => 5.1,
                  'value1d' => 120.4,
                  'value7d' => 1655.386177034,
                  'value30d' => 3169.449749358,
                  'prev1h' => 8.97,
                  'prev1d' => 420.64864259,
                  'prev7d' => 369.488,
                  'prev30d' => 0,
                  'delta1h' => 0.568561872909699,
                  'delta1d' => 0.28622462504259666,
                  'delta7d' => 0.3258563200969991,
                )),
              ),
              49 => 
              array (
                'uuid' => '62cb28ff639e39ab21e44787',
                'symbol' => 'realized_rhapsody',
                'name' => 'Realized Rhapsody',
                'date' => '2022-07-15',
                'image' => 'https://bafybeiftbvkcyj5iuhktw2mivh6rjt6tz3fvppje6w37zyp5d7nuzj4iky.ipfs.nftstorage.link/',
                'txVolume' => 
                json_encode(array (
                  'valueAT' => 1665.63648486,
                  'value1h' => 0,
                  'value1d' => 26.149,
                  'value7d' => 1665.63648486,
                  'value30d' => 1665.63648486,
                  'prev1h' => 0.92,
                  'prev1d' => 38.86694644,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 0,
                  'delta1d' => 0.6727824641528489,
                  'value1dME' => 26.149,
                  'value7dME' => 1647.3399085,
                )),
                'avgPrice' => 
                json_encode(array (
                  'valueAT' => 1.6024707281128405,
                  'value1h' => 0,
                  'value1d' => 0.5684565217391304,
                  'value7d' => 1.6024707281128405,
                  'value30d' => 1.6024707281128405,
                  'prev1h' => 0.46,
                  'prev1d' => 0.7737918367346939,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 0,
                  'delta1d' => 0.7346375275008674,
                )),
                'floorPrice' => 
                json_encode(array (
                  'value1h' => 0.47,
                  'value1d' => 0.37,
                  'value7d' => 0.084,
                  'value30d' => 0.084,
                  'prev1h' => 0.46,
                  'prev1d' => 0.55,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 1.0217391304347825,
                  'delta1d' => 0.6727272727272726,
                )),
                'txVolumeME' => 
                json_encode(array (
                  'valueAT' => 1647.3399085,
                  'value1h' => 0,
                  'value1d' => 26.149,
                  'value7d' => 1647.3399085,
                  'value30d' => 1647.3399085,
                  'prev1h' => 0.92,
                  'prev1d' => 37.9158,
                  'prev7d' => 0,
                  'prev30d' => 0,
                  'delta1h' => 0,
                  'delta1d' => 0.689659719694692,
                ))
              )
            );

        foreach ($data as $value) {
            DB::table('collections')->insert($value);
        }

        $description = array (
          0 => 
          array (
            'name' => 'Pixel Guild',
            'symbol' => 'pixel_guild',
            'description' => 'Join a 8,888 Guild Heroes, and fight for glory on Solana\'s first action-based P2E Platformer with a scaling reward system! Earn, trade, and battle against fellow members to increase your rewards. Maximize your earning potential by participating in Competitions, Challenges and Community Events! Your adventure awaits Solana! Don\'t be left behind!',
            'assets' => 
            array (
              'bannerImage' => 'https://cdn.discordapp.com/attachments/998721719248355378/1001975709801119824/Twitter_Banner_New.png',
            ),
            'links' => 
            array (
            ),
          ),
          1 => 
          array (
            'name' => 'Lil Foxy',
            'symbol' => 'lil_foxy',
            'description' => 'Lil Foxy are a collection of 2222 Lil Foxy NFTs and 1111 $FCF ( Foxy Coin Flip ).
        You are welcome to join our community and ride the wave with us.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeif3w5mxinaxgeb6zf6zbgjz267iijygbuup67m2mtszm3ref42x34.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/LilFoxyDAO',
              'discord' => 'https://discord.gg/yWr3TguqZG',
            ),
          ),
          2 => 
          array (
            'name' => 'FROOTS',
            'symbol' => 'frootsnft',
            'description' => 'Froots, also known as \'The Vibers of Solana\' is a community driven project of cute froots that aims to spread good vibes and provide its holders with great opportunities, through their different ventures.
        ',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreie65k75iimftt5az5we5aj72dco7bh3smqdyx67eu2yl62tsqjchu.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/frootsnft',
              'discord' => 'https://discord.gg/frootsnft',
              'website' => 'https://frootsnft.com/',
            ),
          ),
          3 => 
          array (
            'name' => 'KawaiiZoo',
            'symbol' => 'kawaiizoo',
            'description' => 'Kawaii Zoo is the first zoo in the Solana Metaverse and the first all-in-one project for tools to navigate the Solana Ecosystem!',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/25cb4b3a315bcb21007b82afdb619885/0f93d093',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/Kawaii__Zoo',
              'discord' => 'https://discord.gg/bdxzGuSuTV',
              'website' => 'https://kawaii-zoo.com/',
            ),
          ),
          4 => 
          array (
            'name' => 'Plagued Verse',
            'symbol' => 'plagued_verse',
            'description' => 'All things plagued.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/3b31252d6cecce0675a439772ab79ee1/a43041e8',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/Plague_Doc_NFT',
              'website' => 'https://www.plaguedoctors.io/',
            ),
          ),
          5 => 
          array (
            'name' => 'The Xenobots Project',
            'symbol' => 'the_xenobots_project',
            'description' => 'Community focused, multi-utility project with 2,000 animated Xenobots and their 1000 animated Minibots. In a war to control the Xenoverse, the Xenobots appear as a tool of evil. They have now been captured and we have to find a way to control them.
        ',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreievhkdsd25eplqy2whgtrby6nkdayt6jkyjcgg5ekzrvpc4zzdh2u.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/XenobotsNFT',
              'discord' => 'https://discord.gg/RvRbzhbVsn',
            ),
          ),
          6 => 
          array (
            'name' => 'MooBaa',
            'symbol' => 'moobaa',
            'description' => 'Once united, the MooBaa were forced to leave their native world in search of Supergrass. Millenniums have passed, now six alien tribes compete to reclaim the planet they once called home.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeiajerpkblimdiye2t5djiridjr54i4ybj45jywb5o76um2wixipkm.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/moobaatribe',
              'discord' => 'https://discord.gg/aTs54zapVU',
              'website' => 'https://moobaa.club/',
            ),
          ),
          7 => 
          array (
            'name' => 'SolYetis',
            'symbol' => 'solyetis',
            'description' => 'A unique strong and fun community on Solana. Join us now to become a Yeti!',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeigeakjwdjc2nqqa2vcdm2d5epuuvpxc6x2knsxteckmxubny6tg6a.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/SolYetis',
              'discord' => 'https://discord.gg/ZVr7sYs7jn',
              'website' => 'https://t.co/RiBKOvPVbt',
            ),
          ),
          8 => 
          array (
            'name' => 'SOLhouse',
            'symbol' => 'solhouse',
            'description' => 'SOLhouse is an immersive casino experience, which allows users to wager their Solana tokens. SOLhouse collects a 4% fee on every game and distributes it to our holders.',
            'assets' => 
            array (
              'bannerImage' => 'https://pbs.twimg.com/profile_banners/1480083346688405504/1641716229/1500x500',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/SOLhouseNFTs',
              'discord' => 'https://discord.gg/LTyGO3O8rg',
              'website' => 'https://t.co/3XQ5nua3JA',
            ),
          ),
          9 => 
          array (
            'name' => 'Solcrash',
            'symbol' => 'solcrash',
            'description' => '90% of all generated revenue off https://solcrash.io/ are distributed amongst all Pokerfaces & Crashfaces daily!',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreicsaqvhmtos3sv3u2xbfh23w77tfy7jgcno4lfhgvr5hbzis7rxvi.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/solcrash',
              'discord' => 'https://discord.gg/uf9thNnjtH',
              'website' => 'https://t.co/n4rQOXet22',
            ),
          ),
          10 => 
          array (
            'name' => 'CatchKing',
            'symbol' => 'catchking',
            'description' => '
        Welcome to Catchtopia: a constantly evolving gameplay universe. Play as Catch, a fearless explorer on a mission to collect everything under the sun in this exciting new take on the collect-a-thon and rogue-lite genres. The game merges the relaxing, casual, atmospheric gameplay typical of collect-a-thons with the thrilling combat that puts you on the edge of your seat in rogue-lites. Fill out your collection log and progress through the game as you fight through dungeons of fierce enemies, gather resources through harvesting, scavenging, and fishing! Make friends with other players, collect adorable pets, trade with other players on an open marketplace, and even battle your pets against other players!',
            'assets' => 
            array (
              'bannerImage' => 'https://cdn.discordapp.com/attachments/950788655126024192/994691436173873303/catchking3840x2160.png',
            ),
            'links' => 
            array (
            ),
          ),
          11 => 
          array (
            'name' => 'Nezumi Dominion',
            'symbol' => 'nezumidominion',
            'description' => 'Welcome to the Nezumi Dominion! Story driven project with Sick art, multiple collections, multiple staking pools, and multiple SPL tokens',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreighbpyno6qgzhsrtxhnacrh7fs6b6hh5u5h6oihardmsvwhclv57a.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/NezumiDominion',
              'discord' => 'https://discord.gg/NezumiDominion',
              'website' => 'https://www.nezumidominion.com/',
            ),
          ),
          12 => 
          array (
            'name' => 'Rowdy DAO',
            'symbol' => 'rowdydao',
            'description' => 'Rowdy DAO is a collection of 4424 + 2,212 unique pixelated Rams and Lambs on the Solana Blockchain. We have the most active, engaged, and ROWDY community out there. Our project is all about giving back to holders; community is our #1 priority. You can stake your Rowdy Rams to earn $SUITES, join raffles/giveaways, and vibe with the community! Join the herd today!',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreiahiovot6lqi5ayrcd2veov5nrlulpvbsbdi57uz4qbbz6ijorpga.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/RowdyRamsNFT',
              'discord' => 'https://discord.gg/rowdyrams',
            ),
          ),
          13 => 
          array (
            'name' => 'Metafigz',
            'symbol' => 'metafigz',
            'description' => 'The first NFT-constructor on Solana Blockchain. Create your characters block by block, Earn $BRICKZ utility token, Build and Collect items to form a new city in the future Build-to-Earn game.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeieacqqcq2yxo6k5bkrzfwbdh6r3fcdlcvj7xsfwdaw32nv6eyrx5e.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/MetafigzNFT',
              'discord' => 'https://discord.gg/metafigz',
              'website' => 'https://metafigz.com/',
            ),
          ),
          14 => 
          array (
            'name' => 'PLANE-X',
            'symbol' => 'planex',
            'description' => '3,333 unique planes that will take you on exploration around SOLANA Universe. High quality audio-visual NFT collection. Powered by $AVTUR.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreidxatkusotaze4o3ol6zl3obzcsnvzaid6zuvtowam2wj52w3uixi.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/PlaneX_io',
              'discord' => 'https://discord.gg/7TxHLKMuWx',
            ),
          ),
          15 => 
          array (
            'name' => 'KalaKlub',
            'symbol' => 'kalaklub',
            'description' => 'Join the MOVEMENT ',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeiaeashmh3d2nkvzvdbahj2aalto7zpj67bbquf6bqsr2k3axt5bmi.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/KalaKlub_',
              'discord' => 'https://discord.gg/kalaklub',
              'website' => 'https://kalaklub.io/',
            ),
          ),
          16 => 
          array (
            'name' => 'Danger Valley',
            'symbol' => 'danger_valley',
            'description' => 'Solana-based. Community-based. NFT-based. LFG-based. WAGMI-based platform.
        Welcome to the Danger Valley!',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/70597a7fa603b33984965f09a95337fb/6312af0b',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/danger_valley',
              'discord' => 'https://discord.gg/dangervalley',
            ),
          ),
          17 => 
          array (
            'name' => 'Alpha Pharaohs',
            'symbol' => 'alpha_pharaohs',
            'description' => 'Alpha Pharaohs are tasked with resurrecting the Egyptian Gods; Ra and Anubis. Enter the Sacred DAO & possess the key to unlocking the full power of the ultimate Ra v Anubis collection.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/2c1d058f360b59e5b36ad38e7f2999cb/0ec7d07e',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/AlphaPharaohs',
              'discord' => 'https://discord.gg/alphapharaohs',
            ),
          ),
          18 => 
          array (
            'name' => 'CAVEWORLD',
            'symbol' => 'caveworld',
            'description' => '⚔️ Battle. Evolve. Earn 🌎| A #PlayToEarn PvP Game Built for Mobile | Powered by $CAVE Coin & Cavemen NFTs',
            'assets' => 
            array (
              'bannerImage' => 'https://pbs.twimg.com/profile_banners/1424442445551575043/1655282712/1500x500',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/TheCavemenClub',
              'discord' => 'https://discord.gg/day2aP3P8k',
            ),
          ),
          19 => 
          array (
            'name' => 'Degen Mummy',
            'symbol' => 'degen_mummy',
            'description' => 'DEGEN MUMMY RISE FROM THE GROUND',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreibmssl4l32jyvytiykdby5lkpsqrzd2mwgvgx2wbjpfmu6ckrz3ly.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/DegenMummy',
              'discord' => 'https://discord.gg/tXdf9DBBgX',
            ),
          ),
          20 => 
          array (
            'name' => '2105_NFT',
            'symbol' => '2105_nft',
            'description' => 'A place to feel at home…a whole universe to explore! For the 5,555 Voyagers community we are building an immersive Web3 entertainment experience.',
            'assets' => 
            array (
              'bannerImage' => 'https://pbs.twimg.com/profile_banners/1508815383242981389/1655753502/1500x500',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/2105_NFT',
              'discord' => 'https://discord.gg/2105',
              'website' => 'https://2105.app/',
            ),
          ),
          21 => 
          array (
            'name' => 'Taiyo Robotics',
            'symbol' => 'taiyo_robotics',
            'description' => 'Taiyo Robotics, building the #Solana Blockchain through tech innovation and community.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeiamekeogtkvk4mimo74libif26tj46y5ivmo5txwdfpptxf2oczpe.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/TaiyoRobotics',
              'discord' => 'https://discord.gg/66MQBHMn4n',
              'website' => 'https://taiyorobotics.com/',
            ),
          ),
          22 => 
          array (
            'name' => 'Bunnies N Homies Club',
            'symbol' => 'bunniesnhomies',
            'description' => 'One of the best art collections in all of Solana. Bunnies N Homies are here to take over!',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreigoer72m6ntry3lgze6v2m7yi4htiasgjlviwjbpg3t54suj2pspu.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/BunniesNHomies',
              'discord' => 'https://discord.gg/VPTXQDKbeC',
              'website' => 'https://bunniesnhomies.io/',
            ),
          ),
          23 => 
          array (
            'name' => 'Mrbot',
            'symbol' => 'mrbot',
            'description' => 'Mrbot ecosystem: Communities, tools, brand and innovation. Custom platforms and utilities made from scratch by a full-time team of hard workers.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreiahzeypmu2s2ritg4wryjncgiqy2h6lzl6miqh46xsj4ljhcqpusy.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/mrbotnft',
              'discord' => 'https://discord.gg/zZttYaVEQ9',
              'website' => 'https://mrbot.tech/',
            ),
          ),
          24 => 
          array (
            'name' => 'Goats Gang',
            'symbol' => 'goats_gang',
            'description' => 'Goat Gang, a project driven by our wonderful community with access to our upcoming Metaverse and our upcoming blockchain investigator tools. Are you ready to join the best community? 🐐🤍',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreifqdrgazqr4uai5a6ew4gyykhe2yamp2gygznzgyxk4vntblvl26a.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/GoatsSolana',
              'discord' => 'https://discord.gg/e9N5ehbGnp',
            ),
          ),
          25 => 
          array (
            'name' => 'TRUE',
            'symbol' => 'true',
            'description' => 'A community created for us by us. Building a DAO led by a degen army. Stake your True Degen and earn $TRUE',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/bd51efeb066bc9f240f03e543cea334c/0d75a1a0',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/TrueDegenz',
              'discord' => 'https://discord.gg/xKtD9m9VRN',
              'website' => 'https://raffle.truedegenz.com/',
            ),
          ),
          26 => 
          array (
            'name' => 'Just Ape',
            'symbol' => 'justape',
            'description' => 'Just ape. None of the fluff, all of the value.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeidx2nzbq62f3fvwzndbxwj4tl3ndkqpizkpmd6dz3bnds25bzftim.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/justape_',
              'discord' => 'https://discord.gg/justape',
              'website' => 'https://www.justape.co/',
            ),
          ),
          27 => 
          array (
            'name' => 'Gothic Degens',
            'symbol' => 'gothic_degens',
            'description' => 'Gothic Degens bringing new meta to the SOL ecosystem. 
        
        We are establishing partnerships and collaborations to get the whole Sol NFT space together.',
            'assets' => 
            array (
              'bannerImage' => 'https://i.imgur.com/I8r6i8y.png',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/GothicDegens',
              'discord' => 'https://discord.gg/GQdnwZgaAP',
            ),
          ),
          28 => 
          array (
            'name' => 'VERY TECH',
            'symbol' => 'verytech',
            'description' => 'VERY is every NFT trader\'s mentor, gear, and asset. Enabling our users access to comprehensible real-time data, robust automation and in-depth project research allows us to stay ahead of curve and take action to maintain an efficient and informed investment.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreieupvcyludg4md572zv67hp4yegpbkkruwyvu6zyv4vxl4vjkcnvy.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/very_io',
              'discord' => 'https://discord.gg/very-tech',
              'website' => 'https://www.verytech.io/home',
            ),
          ),
          29 => 
          array (
            'name' => 'Kalisten',
            'symbol' => 'kalisten',
            'description' => 'Kalisten is Train to Earn. We\'re here to conquer the fitness industry, with real and in App functionality, thanks to KS and KST.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeih3ltzebgdyqkhyazn4a4m5aa7gl7etuzxor7a2ndos2wfzow7pbi.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/kalisten_',
              'discord' => 'https://discord.gg/kalisten',
              'website' => 'https://kalisten.app/kalisten-nft-collection/',
            ),
          ),
          30 => 
          array (
            'name' => 'The Pilgrims',
            'symbol' => 'the_pilgrims_collection',
            'description' => 'The half-light wars have torn mankind asunder. All that remains are fragments of the old age.
        Pilgrims, you are bequeathed to traverse this forsaken land. Trust in your instincts; seek refuge in The Sanctuary; respect the order of the High Table; surrender your faith and belief unto The $EYE; muster as much resources as you can and become Chosen.
        And maybe, you too may live to see the dawn of this new age.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/ceaf975181a03da9449e2ff2701f7552/2f0f8df3',
            ),
            'links' => 
            array (
            ),
          ),
          31 => 
          array (
            'name' => 'Udder Chaos',
            'symbol' => 'udder_chaos',
            'description' => 'Udder Chaos strives to bring clarity to web3 with their review-to-earn platform and providing sustainable income through their validator.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreidu5c2lj6yifym6lvugumizfrbyjbsjwbcmjkt6gt4pbd5xmwdvse.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/UdderChaosSOL',
              'discord' => 'https://discord.gg/udderchaos',
              'website' => 'https://udderchaos.io/',
            ),
          ),
          32 => 
          array (
            'name' => 'Degenerate Trash Pandas',
            'symbol' => 'degenerate_trash_pandas',
            'description' => 'Inhabiting their own underworld society, the Degenerate Trash Pandas are governed by no individuals and live by no rules. What they have is their trash, and their trash is their treasure. They’ll do whatever they can to get their dirty little paws on it.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreidfjiyy5bvh56s2bng7uhqrkmnhanbiuuedg54a25ndfwcikck7mu.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/DegenTrashPanda',
              'discord' => 'https://discord.gg/degentrashpandas',
              'website' => 'https://degentrashpandas.com/',
            ),
          ),
          33 => 
          array (
            'name' => 'Pesky Penguins',
            'symbol' => 'pesky_penguins',
            'description' => 'Deep in the Antarctic lives a fun and lively group of penguins who work every day to make the Solana community and their home city of Nootopia a better and more prosperous place.
        
        But not everybody shares their love and WAGMI vibes; the Dread Magus Gargolon would seek to destroy every one of the Pesky Penguins and reclaim Antarctica for himself!
        
        Come join the global community working to grow Nootopia and the Solana ecosystem as we evade The Snowball, write our story, and work to defeat Gargolon!',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreihhlxs3vd5z75hxswgoj4evkg7o5cipfipmscpypza2jpv56rlyjq.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/https://twitter.com/peskypenguins',
              'discord' => 'https://discord.gg/peskypenguins',
              'website' => 'https://pesky-penguins.com/',
            ),
          ),
          34 => 
          array (
            'name' => 'Probably Nothing Social Club',
            'symbol' => 'probably_nothing_social_club',
            'description' => 'The Probably Nothing Social Club (PNSC) is the brainchild of Digital Artist "Lex Ryan" and NFT degenerate "Steve Duncan". It\'s a club developed for degenerates, flippers, noodle fingered meatspace escapees and diamond handed gods. PNSC is designed to allow members to express themselves in the NFT world and foster a positive NFT culture.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeihblbuab5vdasms65g4ed7z34bzx5ixblaqyapg62dueffaox3b6m.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/pnsc420',
              'discord' => 'https://discord.gg/CrSx7ewQyp',
              'website' => 'https://www.probablynothingclub.com/',
            ),
          ),
          35 => 
          array (
            'name' => 'Ox Squad Community',
            'symbol' => 'ox_squad_community',
            'description' => 'The ox squad community federates many collections around the $oxsq token. The main goal of this community is to reward holders from reinvesting a percent of resale profits into NFTs and NFT token, Solana, gaming & metaverse projects.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreib5axxul72r3xd3trmavxb5akgps63wvhtizgldidrmapznnswuti.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/TheOxSquadNFT',
              'discord' => 'https://discord.gg/GyDjUWEHDF',
              'website' => 'https://theoxsquadnft.com/',
            ),
          ),
          36 => 
          array (
            'name' => 'Gyris',
            'symbol' => 'gyris',
            'description' => 'Gyris will be more than a beautifully crafted NFT project. Our vision is to become the World’s first Web3 metaverse film and gaming franchise.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreieu762efqs2kltmqkql2pooeea3hqdq7ncxgpfbq4ivbjaolxmb3y.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/Gyris_official',
              'discord' => 'https://discord.gg/94D2rDFwQb',
              'website' => 'https://gyris.io/',
            ),
          ),
          37 => 
          array (
            'name' => 'DemonTools',
            'symbol' => 'demontools',
            'description' => 'Building a revolutionary suite of #DemonTools, while rewarding our most dedicated holders. A collection for creators, pioneers and critical thinkers.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeicfbsgr2z4wr2o7segrdyru3qj4hbexzjklxgu42q4n4lnf7pjbmm.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/SNIPINGDEMONS',
              'discord' => 'https://discord.gg/hcBsgpRU',
              'website' => 'http://demontools.app/',
            ),
          ),
          38 => 
          array (
            'name' => 'Dark Skellies',
            'symbol' => 'dark_skellies',
            'description' => 'A group of Dark Skellies have arrived on the solana blockchain to  provide unique utility to their holders while being the strongest community known to mankind.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreibzpe3qyzuoqbmgzdeascqm6mzgf3beduwqlk423nrenfvzfevsjq.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/SkelliesDAO',
              'discord' => 'https://discord.gg/skellies',
            ),
          ),
          39 => 
          array (
            'name' => 'Gigahub',
            'symbol' => 'gigahub',
            'description' => 'GigaHub is a gaming organisation focused on Gaming, Entertainment, the Metaverse and Web3 E-commerce. From a VR Arena, Monthly Tournaments and a E-com store dedicated to gamers and computer enthusiasts there’s sure to be something you’ll love – get access to all this and more!',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreibpo4hs5xapajdbgvwzx662fw45u2twjiwnrmok3d7jbnhzluvhsq.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/GigaHubOfficial',
              'discord' => 'https://discord.gg/ErrSmu7P4h',
              'website' => 'https://www.gigahub.gg/',
            ),
          ),
          40 => 
          array (
            'name' => 'Solful',
            'symbol' => 'solful',
            'description' => 'SOLFUL is developing a cross-chain NFT networking website for Web 3.0 environment that will benefit both the public with exposure and the holders with royalties and further website usability. Solful Creatures are directly connected to the networking website with it\'s benefits and Solful Divinity acts as a DAO of Solful system.
        ',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeibb3lxwujodtgeshogvykiz3um6n7fdiecutcyt4riq564djos4la.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/SolfulNFT',
              'discord' => 'https://discord.gg/TNhbYV8Swp',
              'website' => 'https://solful.io/',
            ),
          ),
          41 => 
          array (
            'name' => 'Secret Space Society',
            'symbol' => 'secret_space_society',
            'description' => 'The Secret Space Society is a exclusive community that provides a variety of utility to our holders. With the most unique DAO, Rev Share and a huge selection of utility, SSS strives to build a brand connecting the Web2 and Web3 space.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeid6sxe4mpnwdtannwravosmoficthlaqyxkmyyyshjj6zlfcuj4na.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/SecretSpaceSoc1',
              'discord' => 'https://discord.gg/mCDM96xCUA',
              'website' => 'http://secretspacesociety.net/',
            ),
          ),
          42 => 
          array (
            'name' => 'Ghost Kid DAO',
            'symbol' => 'ghost_kid_dao',
            'description' => 'The GhostKidDAO is a community centred project whose aim is to create the largest DAO on Solana allowing everyone to join. It\'s a strong and united community where people with a wide range of experience can learn together, earn whitelists spots, get alpha etc... Holding and staking your Ghost Kid will allow you to earn $BOO which is the GhostKidDAO native token.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreic7zxwnpdaslljcmkq2he5simxhiqc2bmhbf64dyayeropaf7drc4.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/GhostKidDAO',
              'discord' => 'https://discord.gg/bARRDJ99d9',
              'website' => 'https://www.ghostkid.io/',
            ),
          ),
          43 => 
          array (
            'name' => 'Disarticulated Skullys',
            'symbol' => 'disarticulatedskullys',
            'description' => 'A collection that represents the evolution of humanity.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreidcwxwofed4mzoudur27a2u5bhqzdnjvylv772bkkcsjfxwqrrwjy.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/dskullys',
              'discord' => 'https://discord.gg/disarticulatedskullys',
              'website' => 'https://dskullys.com/',
            ),
          ),
          44 => 
          array (
            'name' => 'Turtles',
            'symbol' => 'turtles',
            'description' => 'There is only one rule - don’t be a paperhand!',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeiadoo5vbnsi34mznrquurw65jyckufewqzfye32ogne7vd22shwui.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/TurtlesNFT',
              'discord' => 'https://discord.gg/turtles',
              'website' => 'https://t.co/BPB65uTr0i',
            ),
          ),
          45 => 
          array (
            'name' => 'The Doge Capital',
            'symbol' => 'thedogecapital',
            'description' => 'Doge Capital is a collection of 5000 cute pixel doges on Solana. Stake your Doges & start earning $DAWG today !! Come be a part of one of the best NFT communities on Solana.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreidw6dxkbhfu4gyxzhgf4ujzsrouftnrka2f7yixelyeuajek5ki7i.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/thedogecapital',
              'discord' => 'https://discord.gg/jhpvn7fGh7',
              'website' => 'https://thedogecapital.com/',
            ),
          ),
          46 => 
          array (
            'name' => 'Bandwagon NFTs',
            'symbol' => 'bandwagonnfts',
            'description' => 'Bandwagon NFTs are NFT collections that align with professional sporting events and contests. Minting a Bandwagon NFT is your entry to a specific sports event/contest. Holders of the winning team/player split the pot.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreihzyhi4ypy7l3q6jbymcjv6mkbba3i62uefovvwohi77bbeimmlyy.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/solbandwagon',
              'discord' => 'https://discord.gg/kmBftVCuJ4',
              'website' => 'https://www.solbandwagon.com/',
            ),
          ),
          47 => 
          array (
            'name' => 'Gasless Geese',
            'symbol' => 'gaslessgeese',
            'description' => 'GooseSwap was built to change the way we buy/sell NFTs. The traditional marketplace model is dated and doesn’t prioritise what we all know and love about the ecosystem — the social element. So we built a state of the art, decentralised P2P NFT trading platform and marketplace that places human interaction at the centre of all things.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreidaykuhax3prsgs4y56dqvoatnnotbl54sb5qzemozisvneo7kanq.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/GaslessGeese',
              'discord' => 'https://discord.gg/2H43jpVnpr',
            ),
          ),
          48 => 
          array (
            'name' => 'Metagates',
            'symbol' => 'metagates',
            'description' => 'Metagates is an immersive open world game where players can battle each other, claim their own land, and so much more. A portal has been opened connecting the metaverse to the real world - what is next to come?
        ',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeiejanbh53evojay2yy3adj42mx4l5sssl45dk547ey5odayhfae5i.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/MetagatesOnline',
              'discord' => 'https://discord.gg/a7GHUYBzgh',
              'website' => 'https://www.metagates.io/',
            ),
          ),
          49 => 
          array (
            'name' => 'Secret Llama Agency & Traits',
            'symbol' => 'secretllamaagency',
            'description' => 'The Secret Llama Agency is an innovative project with customizable traits! Every trait is its own NFT and can be permanently combined with your Llama Agent or sold on the secondary market instead. Stake your Agent to earn $HAY and use it for Blue Chip NFTs, Traits, ID cards & more. 25 Alpaca imposters hidden within the collection. Recruiting Llama Agents today!',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeicbkzwziairqn27g4q6ew67ndcbys7zcbv2artecqhcxyhmkmjfom.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/SecretLlama_A',
              'discord' => 'https://discord.gg/5STFvY9nu5',
              'website' => 'https://www.secretllamaagency.com/',
            ),
          ),
          50 => 
          array (
            'name' => 'SkateX',
            'symbol' => 'skatex',
            'description' => 'SkateX is a forthcoming free-to-play extreme sports MMO video game that uses blockchain so players can truly own their digital gear. SkateX boards, streetwear and more are NFTs that are actually used in the game. Ride your board, deck it out with stickers, wear whatever truly expresses your digital identity. And most of all – have fun!',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeidsmabek4oz3cilaslxsdioilerlcn4fusj3tgtiwbgip6s4eoehe.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/PlaySkateX',
              'discord' => 'https://discord.gg/skatex',
              'website' => 'https://www.skatex.io/',
            ),
          ),
          51 => 
          array (
            'name' => 'Broccoli DAO',
            'symbol' => 'brocollidao',
            'description' => 'Broccoli DAO is your hub for professionalized alpha and trading tools and the home of CyberVillainz and CyberHeroez.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeib3qv3jg7cqype5ofxn4e2qqyrxg3mbppelhztx6c66flq5xq2hie.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/broccoli_dao',
              'discord' => 'https://discord.gg/JyUxhxFx',
              'website' => 'https://www.broccolidao.com/',
            ),
          ),
          52 => 
          array (
            'name' => 'Trippy World',
            'symbol' => 'trippy_world',
            'description' => 'Trippy World is a collection of 3,333 unique psychedelic and anime style characters building an impactful community. The world has many facets and is powered by $WRLD. You ready for the trip?
        ',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreiekbh32jxryw6xjhuml36cppfs4burgpnr3kg4hlo3bi4oapw2neu.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/trippyworldlabs',
              'discord' => 'https://discord.gg/trippyworldlabs',
            ),
          ),
          53 => 
          array (
            'name' => 'FunGuyz Studios',
            'symbol' => 'funguyz_studios',
            'description' => 'Making a name for ourselves as the premier builders in Solana, FunGuyz Studios continues to create amazing collections and partnerships across Web3. ',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeiekwevmybny7hxnhuulaiv6bfz2aiv55qyhpcm5ux356qfvxcjxwi.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/FunGuyzNFT',
              'discord' => 'https://discord.gg/funguyz',
              'website' => 'https://funguyz.io/',
            ),
          ),
          54 => 
          array (
            'name' => 'Carton Kids',
            'symbol' => 'cartonkids',
            'description' => 'With your carton kid, you can do things that you were never allowed to do before. Let\'s hang out and kick ass on the street. No permissions and no bullshit from your parents, carton kids are allowed anything.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeihar7rqimf62zuiulndsd6beznutl2x36p4f2jm5pe7rwlnziig2q.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/CartonkidsNFT',
              'discord' => 'https://discord.gg/Cartonkids',
              'website' => 'http://cartonkids.xyz/',
            ),
          ),
          55 => 
          array (
            'name' => 'Space Heads',
            'symbol' => 'space_heads_world',
            'description' => '3,888 Space Heads from different origins form a Confederation to save their lives. They launch to space in capsules looking for a new world! We don’t know what will happen next!',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeiehkbpy6vysm7chyzzeglvxpd7g3zqhhlj2v3azd5dclftsfxfvli.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/Space_Heads_NFT',
              'discord' => 'https://discord.gg/spaceheads',
            ),
          ),
          56 => 
          array (
            'name' => 'Honeyland',
            'symbol' => 'honeyland',
            'description' => 'Honeyland is a strategy and resource management game, open ecosystem and decentralized exchange where developers and studios build tools, games, items and more into our platform that allows for infinite game and experience possibilities that never get old.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeigifidkbb3ex4xnepl5dbt3pldwdqtfr7mjjm7bmq6twebhixmw2a.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/HoneylandGameFi',
              'discord' => 'https://discord.gg/honeyland',
              'website' => 'https://honey.land/',
            ),
          ),
          57 => 
          array (
            'name' => 'Suteki',
            'symbol' => 'suteki',
            'description' => 'Suteki is a unique anime NFT that focuses on peer to peer interaction and collaboration. Choose your Buzoku Tribe and join an anime focused community that uses their platform to put a spotlight on the up and coming writer/artist.',
            'assets' => 
            array (
              'bannerImage' => 'https://cdn.discordapp.com/attachments/969105394741940274/972399243585261588/FC04D5FF-2ED6-43FF-BD1B-568064CF17B7.jpg',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/Suteki_NFT',
              'discord' => 'https://discord.gg/invite/suteki',
              'website' => 'https://www.suteki.io/',
            ),
          ),
          58 => 
          array (
            'name' => 'HEIR',
            'symbol' => 'heir',
            'description' => 'HEIR is a digital platform celebrating the greatest athlete legacies of all time. The platform’s purpose is rooted in HEIR’s mission of Web23 – jumping the Web2 to Web3 gap by transforming sports fans to owners. HEIR family members experience priceless athlete engagement moments as they co-create the future of sports culture',
            'assets' => 
            array (
              'bannerImage' => 'https://i.imgur.com/xAi7Yqt.png',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/Heir_Company',
              'discord' => 'https://discord.gg/heir',
            ),
          ),
          59 => 
          array (
            'name' => 'ArtMonkees',
            'symbol' => 'artmonkees',
            'description' => 'ArtMonkees is a 2 GEN collection. Made by professional artists. Don\'t miss out on the full stack NFT with Augmented Reality (iPhone/Android), STAKING, BURNING, MonkeeVerse, Raffles, Auctions and $SOLNANAs.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/4b354db5aa9f0cef54b419dc0d9c400b/e3074c24',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/artmonkees',
              'discord' => 'https://discord.gg/artmonkees',
              'website' => 'https://www.artmonkees.io/',
            ),
          ),
          60 => 
          array (
            'name' => 'Defi District',
            'symbol' => 'defi_district',
            'description' => 'Defi District is an experimental place that focuses on merging both physical and digital worlds. The District was founded by passionate real estate, restaurant, marketing, and web3 developers with a multi-year plan for real international expansion. All projects built here, live within the $LUV ecosystem.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeicizeolifbx3jiyncrma6y6v4l5kecrzptwzkkzlgqk6qelqkkwmi.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/defidistrict',
              'discord' => 'https://discord.gg/defidistrict',
            ),
          ),
          61 => 
          array (
            'name' => 'Potprincessnft',
            'symbol' => 'potprincessnft',
            'description' => 'Pot Princess NFT a 420-friendly NFT Community Build on the Solana Blockchain. We\'re dedicated to providing amazing art, and utility to the Solana Blockchain.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/50d4462ce59abbf91efccc5b37ac87ed/ce6aee59',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/potprincessnft',
              'discord' => 'https://discord.gg/potprincessnft',
              'website' => 'https://moonbuds.xyz',
            ),
          ),
          62 => 
          array (
            'name' => 'The Lost Apes',
            'symbol' => 'thelostapes',
            'description' => 'A collection of hand-drawn Apes lost in the metaverse have found themselves on the Solana Blockchain',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeibrcjar3qfy3eef3kcmz4xkya6mjnn4yfiq6u3uzx5f6wyrozugfa.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/TheLostApesNFT',
              'discord' => 'https://discord.gg/thelostapesnft',
            ),
          ),
          63 => 
          array (
            'name' => 'RainyDayz',
            'symbol' => 'rainydayz',
            'description' => 'An #NFT production house. The community for creators.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreig3ysde2mnkrt4r6qnn6d4kgrozm2y3bzmy22qhyauicljkoebkqy.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/RainyDayz_Inc',
            ),
          ),
          64 => 
          array (
            'name' => 'AGE of SAM',
            'symbol' => 'age_of_sam',
            'description' => 'After the fall of House Ether at the end of the Great Gas War, the surviving factions join together to form House SOL. Using some of their best DNA, they clone 4,444 SAM (Solarium Autonomous Miners) to mine the Dark Side of the Moon for Solarium, the scarcest resource in the known Universe.',
            'assets' => 
            array (
              'bannerImage' => 'https://cdn.discordapp.com/attachments/970748643575463946/981371784941174834/aos_cloning_tank_bg.gif',
            ),
            'links' => 
            array (
            ),
          ),
          65 => 
          array (
            'name' => 'Hotel de Mentía',
            'symbol' => 'hoteldementia',
            'description' => 'Welcome to Hotel de Mentía, What past brings you here ?',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeidebgp57xppy7afa7zyapmlnvf4mbem3cinzvbydmrg5tvzoizrom.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/hoteldementia',
              'discord' => 'https://discord.gg/RGJjQ4R9t6',
            ),
          ),
          66 => 
          array (
            'name' => 'Outkast',
            'symbol' => 'outkast',
            'description' => 'These Outkasts didn\'t make the cut. Different mediums, styles, and collaborations. They were once lost and meant to be destroyed, but now they have a new purpose. GEN 1 is limited to a total of 100 OUTKASTs numbered #001 - #100, each with their own unique story.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreictiyu7qzudxrc3qb6xr236moxbr7wypxsre6u4kgfz6tycsp2ibi.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/OutkastNFTs',
            ),
          ),
          67 => 
          array (
            'name' => 'Trippin\' Ape Tribe',
            'symbol' => 'trippin_ape_tribe',
            'description' => 'Trippin\' Ape Tribe is a community-first PFP project on Solana, backed by strong and ownable branding, cheeky storytelling, innovative long-term utility, and a passionate community of free-thinking degens.
        
        The Tribe ecosystem is compromised of two complementary collections. Choose your ape from our genesis PFP collection, and then prepare yourself for the journey to ascension with the items from Chorles’s Sacraments, our utility NFT collection.
        
        Trust the process. It’s not a cult.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/51a65097cc3a081c247bcaf004d70e03/3946bf95',
            ),
            'links' => 
            array (
            ),
          ),
          68 => 
          array (
            'name' => 'BBCA',
            'symbol' => 'bbca',
            'description' => 'Big Brain Clique Alpha (BBCA) ',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreifiko6pzpcu57cimkxzyz2jb5lqp72e3jquzblpno5n77ofmlyzu4.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/BBCAlphaNFT',
              'discord' => 'https://discord.gg/adzqcAwp',
            ),
          ),
          69 => 
          array (
            'name' => 'Tenkai Apes',
            'symbol' => 'tenkaiapes',
            'description' => 'Follow the journey of the last Tenkai Apes as they repopulate Earth in hopes of saving their dying race. Powered by $TENKAI',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreieuoc5sm7v6xsjncbytgz232x7wd3zrrxqzwtxafchc5646n2urqu.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/TenkaiApes',
              'discord' => 'https://discord.gg/PfrZe9hPcP',
            ),
          ),
          70 => 
          array (
            'name' => 'TTCC',
            'symbol' => 'ttcc',
            'description' => 'TTCC is a reveal based NFT project with groundbreaking potential. The first official Dual-Token system and customizable NFT collection is based on historical events and time periods throughout history and film. Community managed, and 100% royalties directly to DAO treasury. Come fly with us! "where we\'re going we don\'t need roads" ! ',
            'assets' => 
            array (
              'bannerImage' => 'https://nftstorage.link/ipfs/bafybeiff77zeje6kztvyv53c3q4w7vwy2i5r6ylr6m3gkih7oxbahi6kx4',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/TimeTravelingCC',
              'discord' => 'https://discord.gg/ttcc',
            ),
          ),
          71 => 
          array (
            'name' => 'The Dope Gallery',
            'symbol' => 'the_dope_gallery',
            'description' => 'The Dope Gallery is an innovative NFT art studio blending the line between physical and digital art and how you experience it. We’re helping to onboard and scale artists via a gallery style model in both the physical and digital realms of art.',
            'assets' => 
            array (
              'bannerImage' => 'https://cdn.discordapp.com/attachments/955518354444124170/978309248289214525/unknown.png',
            ),
            'links' => 
            array (
            ),
          ),
          72 => 
          array (
            'name' => 'Ehecatl Universe',
            'symbol' => 'ehecatl_universe',
            'description' => 'Consisting of 3333 Ehecatl Dragons that are slowly hunted by the DragonBorns, using dead baby dragon heads to mutate themselves into stronger beings. Until the Ehecatl Dragons learn how to mutate themselves into an unstoppable force.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeibks5pmhkguvco3zc4dlhwjdojidahh335th3avycx3pt7ppcqfau.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/EhecatlUniverse',
              'discord' => 'https://discord.gg/vbpD6qZtUn',
            ),
          ),
          73 => 
          array (
            'name' => 'SantaVerse',
            'symbol' => 'santaverse',
            'description' => 'Santa has decided that Christmas shouldn\'t be reserved to one day a year, therefore he has packed his sledge and with the help of his helpers, he has set the mission of making everyday Christmas for his holders. HO HO HODL!!',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreidnc6oj5tlesh65bhlveuuvyhi72lokio2ko7omcwkc7lyjaawvsy.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/SantaMinersNFT',
              'discord' => 'https://discord.gg/santaminers',
            ),
          ),
          74 => 
          array (
            'name' => 'Rotten Ville',
            'symbol' => 'rotten_ville',
            'description' => 'A Strange radioactive explosion turned all the people from a Village into Rotten people, creating our home RottenVille, don\'t worry, We are now people with a purpose!
        
        3D Art, Staking, Game, Crew and The RottenVerse.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeibro2vn4xx5ks63e3554bf4uu4s67gbbeh22htxe5fnorh6eym2oe.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/rotten_ville',
              'discord' => 'https://discord.gg/QeR9yvSWvk',
              'website' => 'https://rottenville.io/',
            ),
          ),
          75 => 
          array (
            'name' => 'Skeleton Crew',
            'symbol' => 'skeletoncrew',
            'description' => 'The Skeleton Crew is home to 6,666 SKULLS that connect you to the finest art and Web3 tech tools on Solana. Our native token $SKULL is earned through staking, and provides access to independent artist launches and perks in Treat Toolbox and our other products.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeiawh2xwt34ze5txjnycjj6aimfetq5fqqgpnufoe33vrf5hzzfkky.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/skeletoncrewrip',
              'discord' => 'https://discord.gg/skeletoncrewrip',
            ),
          ),
          76 => 
          array (
            'name' => 'Akari Labs',
            'symbol' => 'akarilabs',
            'description' => 'Akari is a DeFi Metaverse centered around $GLOW. Stake to earn $GLOW and test your luck on missions to The Shrine. Art created by an inhouse Japanese artist. Are you ready to join us on the streets of Light City?',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeifhpv3cvenhk5bv3kxeeo65jd4yb3gwgpebkgdwezs7h3lbo52p4a.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/AkariLabs',
              'discord' => 'https://discord.gg/akarilabs',
            ),
          ),
          77 => 
          array (
            'name' => 'Zaysan Raptors',
            'symbol' => 'zoom',
            'description' => 'An exclusive collection of 1,555 Zaptors powered by $ELIXIR',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreieeis5ycbiy2vuija5orglarsfnfgljeici72wgkpskyj3tlwc4ae.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/ZaysanRaptors',
              'discord' => 'https://discord.gg/zaysanraptors',
              'website' => 'https://zaysanraptors.io/',
            ),
          ),
          78 => 
          array (
            'name' => 'Dahlys',
            'symbol' => 'dahlys',
            'description' => 'Dahlys is a collection of dreamers, and dreams. Earn $IMGN as you let your Dahlys dream in the Dream Emporium and explore the depths of their imagination. Through the projects core program, the Dahly Dream Academy, we help young promising artists break into Web3',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeidyrdmimwqizqmz2urkw65zdbsrk2p36go3cnlgf7nj5axopolbhi.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/DahlysArt',
              'discord' => 'https://discord.gg/dahlydreamemporium',
            ),
          ),
          79 => 
          array (
            'name' => 'Baked Bots ',
            'symbol' => 'bakedbots',
            'description' => 'A deflationary Solana NFT project working within the cannabis industry.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeifxudst3ferkafptkh6o26mqsftdr5wwvolhtnccxyvubrcyw3jwm.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/bakedbots420',
              'discord' => 'https://discord.gg/8ZZdzkMPFS',
            ),
          ),
          80 => 
          array (
            'name' => 'The Airtight Garage',
            'symbol' => 'theairtightgarage',
            'description' => 'A global Fantasy Racing Game, in its own 3D world',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreib3bb7keundoy7kpiminzr5valj33yjem6l7b3betwjdijzbr2kcq.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/Airtight_Garage',
              'discord' => 'https://discord.gg/MNp9TtNrpZ',
            ),
          ),
          81 => 
          array (
            'name' => 'Pet Solciety Collectibles',
            'symbol' => 'pet_solciety',
            'description' => 'Pet Solciety is a virtual world where it’s adorable inhabitants, the Petizens rebuild their homes.
        
        Petizens can fish, race, quest, build houses and earn $PAWR, which is used to upgrade Towns, decorate their houses and buy new oufits.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeihq2rwgk7nadai5quwvl7kqtfjk7alhgzwumtl2qe25x3x7cuovuu.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/PetSolciety',
              'discord' => 'https://discord.gg/7nJUW6Sr5x',
            ),
          ),
          82 => 
          array (
            'name' => 'Dark Souls',
            'symbol' => 'darksouls',
            'description' => 'Dark Souls is a unique project of dark NFTs consisting from 3 main collections (Lost Souls, Trapped Souls and Lost Spirits). Staking for $SOUL tokens or trade rugged NFTs for $SPIRIT tokens that can be spend to 1/1 art and other NFTs. An art-centered project.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeif3wg3nfuyinfsgulz7vadhxcfp7azwe7womwtjwu2nm6y4gkc3xi.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/SolanaLostSouls',
              'discord' => 'https://discord.gg/eFkRna3jBS',
            ),
          ),
          83 => 
          array (
            'name' => 'MOUS IN DA HOUS',
            'symbol' => 'midh',
            'description' => 'Its da 44TH Street man! A lot of MOUS chilling on their personal subway station surrounded by drugs (chees), lottery, black markets & hella party! If you\'re in da city feel free to enter da 44TH. PS* $44TH only',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/4d23032453e5ac94c4e23e38659c4c23/50790999',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/MousInDaHous',
              'discord' => 'https://discord.gg/mousindahous',
              'website' => 'https://mousindahous.com/',
            ),
          ),
          84 => 
          array (
            'name' => 'Jelly eSports',
            'symbol' => 'jellybabies',
            'description' => 'Jelly eSports aim to be the pioneers of the first eSports organization in the metaverse. We are a collection of JellyBabies, Gamerooms and Rascals. The native token $JELLY provides an abundance of utility for holders. 
        
        Our story in being the forefront of innovation has just begun.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeibnnyrza24zl7jdavqwd6gbrqwxuos5hxao2hp5lpnf3grjtqz5gi.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/JellyeSportsNFT',
              'discord' => 'https://discord.gg/wzEfUjmpFw',
            ),
          ),
          85 => 
          array (
            'name' => 'Krypto Kronikz',
            'symbol' => 'krypto_kronikz',
            'description' => 'A utility focused collection of 3920 Cannabis themed NFTs from the mythic Island of Solacia. Krypto Kronikz provide reward by staking for our utility token $BUDZ which is utilized to expand the Kronik invasion of Solacia through Next-Gen breeding. With cannabis partnerships and a merchandise shop Krypto Kronikz aims to expand beyond a pfp NFT and become a cannabis lifestyle brand.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeigkbzdyafqyueyqcmoj2dyu2x2nddzi5qxs7kmwz2o3nvvgineyri.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/KryptoKronikz',
              'discord' => 'https://discord.gg/hPfQDrGRPN',
            ),
          ),
          86 => 
          array (
            'name' => 'Zenjin Viperz',
            'symbol' => 'zenjinviperz',
            'description' => 'Zenjin Viperz are a collection of 2,000 NFTs on the #Solana Blockchain.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreihpfohq7xv6zyhhtcdzywcbql5d6cqy4j5qvpiew6kbh4c7b2ksfi.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/ZenjinViperz',
              'discord' => 'https://discord.gg/ZenjinViperz',
              'website' => 'https://www.zenjinviperz.io/',
            ),
          ),
          87 => 
          array (
            'name' => 'Sharkbros',
            'symbol' => 'sharkbros',
            'description' => 'Introducing SharkBros, an innovative brand riding the crest of the second digital revolution. 
        
        Holders receive a share of merch store revenue and donations are made to the Ocean Cleanup charity. ',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeig2kgnvb6adnx5vm4eabevo3przpsp2x72n7bxi2s4qlmahfyjsum.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/SharkBrosNFT',
              'discord' => 'https://discord.gg/SharkBros',
              'website' => 'https://www.sharkbros.info',
            ),
          ),
          88 => 
          array (
            'name' => 'The Big Five',
            'symbol' => 'thebigfive',
            'description' => 'The Big Five are Africa\'s Representation of its Pride - The Big Five are an NFT collection of of different generations Based on the African animals - Buffalo, Lion, Elephant, Rhino, Leopard 
        The Project is focused on Staking - Breeding - Earn',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreiaydypoesuj3otqrf6js2p5fw54tjkycze7a6agknaa2pqoiv64yy.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/thebigfivenft',
              'discord' => 'https://discord.gg/thebigfive',
              'website' => 'https://thebig5nft.com/',
            ),
          ),
          89 => 
          array (
            'name' => 'SOTK',
            'symbol' => 'sotk',
            'description' => 'Our world was once filled with peace and harmony - a place where the races lived together in respect and tolerance... but now, that’s all just a memory.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeigkzfc4hploqxzyubjn22lymx5em3a5xw5t4sihuqw4ha2ewbg5fi.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/sotk_nft',
              'discord' => 'https://discord.gg/3YUXrVT4b6',
            ),
          ),
          90 => 
          array (
            'name' => 'Monkey Baby Business',
            'symbol' => 'mbb',
            'description' => 'Monkey Baby Business is a collection of 3,000 monkey baby NFTs that offers a suite of data driven premium platforms for Solana NFT minters, traders, and investors.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeifotuliknebw5pqp3sufyiv467chtvhwldgcl3i47ytsihyirgtlm.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/SolanaMBB',
              'discord' => 'https://discord.gg/monkeybb',
              'website' => 'https://www.monkeybaby.business/',
            ),
          ),
          91 => 
          array (
            'name' => 'Reptilian Renegade',
            'symbol' => 'reptilian_renegade',
            'description' => 'A collective of 4,000 evolved, unique, intelligent, and misunderstood lizards roaming around the Solana ecosystems’ meadows.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeieh4f7rwpmudr6nqpnrd3oeadd4ipssgv7aaxwkmcg3tkr55fmo6i.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/reptilianrenegg?s=21&t=BknxfZtG7et3lQpEYt8XoQ',
              'discord' => 'https://discord.gg/Pu3awdNuUd',
            ),
          ),
          92 => 
          array (
            'name' => 'BitBears',
            'symbol' => 'bit_bears',
            'description' => 'BitBears is a collection made up of 882 honey-eating bears on the Solana blockchain. Owning a BitBear GEN 1 gives holders access to an automated call bot, sniper bot, WL oppurtunities and more. The community of BitBears has expanded through a burn and swap into GEN2 to lower the original supply, and as a result the new born Bears were given access to the AlphaAlpha Access card. Welcome to the GRRGANG.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeiafsljfzl67lcmpqnpy3lhtdzzs4ylzoaxyi4se44fywhs4mvxiqy.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/BitBearsNFT',
              'discord' => 'https://discord.gg/UkPbqxxTaA',
            ),
          ),
          93 => 
          array (
            'name' => 'Undead Sols',
            'symbol' => 'undeadsols',
            'description' => 'A 100% Community-Driven Artistic and Social NFT venture on Solana. All of our royalties (100%) are used to grow the community, stake development, add vallue to our upcoming $BLOOD token, deflationary collection (600 vaulted) and more in discord utilities. Roadmap will be updated soon! Partnership as Infungibles, Sovana metaverse, Kreechures and $KIN, train your daily Undead Soldiers for kin.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/c076cfa9896297b686550446f94aff7b/c7606e9b',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/undeadsols',
              'discord' => 'https://discord.gg/BqFXmRDpEu',
              'website' => 'https://undeadsols.com/',
            ),
          ),
          94 => 
          array (
            'name' => 'Doge Track',
            'symbol' => 'doge_track',
            'description' => 'Digital doge racing on the Solana blockchain! The first of it’s kind P2E racing game with a metaverse of different Track NFTs and a stable of Doge NFTs to race and breed. Doges & Tracks can be staked for $DTRK and Track owners get a percentage of the prize pool from each race that happens on their track. Doges can be raced for $DTRK and races are ongoing on all available tracks 24/7.',
            'assets' => 
            array (
              'bannerImage' => 'https://cdn.discordapp.com/attachments/950886269217558548/973654403745710110/twitter_banner.png',
            ),
            'links' => 
            array (
            ),
          ),
          95 => 
          array (
            'name' => 'Yoked Yetis',
            'symbol' => 'yokedyetis',
            'description' => 'A collection of 3333 Yoked Yetis pushing weight on Solana through the gym, staking, $TREN, revenue sharing, DAO, plus more',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreiemhoc7qn3vog6rkdkzv2vybxjt4dlhzcyfs3da4uj4vn2y7ziy34.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/YokedYetis',
              'discord' => 'https://discord.gg/yokedyetis',
              'website' => 'https://yokedyetis.xyz/',
            ),
          ),
          96 => 
          array (
            'name' => 'Kyoudai Labs',
            'symbol' => 'kyoudai_labs',
            'description' => 'Kyoudai Labs - A studio solely focused on building and maintaining World of Kyoudai. ',
            'assets' => 
            array (
              'bannerImage' => 'https://cdn.discordapp.com/attachments/966029619260174346/975595284891598939/KYOUDAI_LABS_COVER.png',
            ),
            'links' => 
            array (
            ),
          ),
          97 => 
          array (
            'name' => 'Shredded Apes',
            'symbol' => 'shredded_apes',
            'description' => 'Shredded apes are bringing health & fitness to the entire NFT space. We are the world’s first Web3 Health & Nutrition Brand, offering high quality products/services that will get you fitter than ever!',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeie6y2viy7vqcv37njljlt42joy7d35tvljfsw2nhtmg4qost7y7v4.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/ShreddedApes',
              'discord' => 'https://discord.gg/KaUEC4Rrpn',
              'website' => 'https://shreddedapes.io/',
            ),
          ),
          98 => 
          array (
            'name' => 'Degen Dojo',
            'symbol' => 'degendojo',
            'description' => 'They’re just a bunch of Broke Samurai that have no war to fight in. They beat each other senseless with dead chickens, gamble like degenerates and cling to the delusion that one day their name will echo through the histories.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeidezi7jovmgarrjpokep5bbfl3vyaash4vqdrrsi44s2kmun3ndym.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/DegenDojoNFT',
              'discord' => 'https://discord.gg/degendojonft',
              'website' => 'https://www.degendojonft.com/',
            ),
          ),
          99 => 
          array (
            'name' => 'ev.io',
            'symbol' => 'evio',
            'description' => 'Experience the Halo of Web3: PvP, PvE, 10+ maps, 20+ weapons, 5 game modes, private games, parties and earn WL tokens. All playable now from the comfort of your browser.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/8d0e2485810e5fba08f7eb8eb285687b/b0319bb6',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/play_evio',
              'discord' => 'https://discord.gg/cUqj7wQPkt',
              'website' => 'https://psyker.game',
            ),
          ),
          100 => 
          array (
            'name' => 'TombStoned High Society',
            'symbol' => 'tombstoned',
            'description' => 'TombStoned is a collection of 6,666 Stoned Skeletons that have risen into the metaverse in search of $JOINTS, Buds, and their SOL.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeiembksuyco4qgvqszhix4lh53dz7xesjopzz4tvq4u3ts4rdrfxku.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/TombStonedHS',
              'discord' => 'https://discord.gg/catacombs',
              'website' => 'https://www.tombstoned.xyz/',
            ),
          ),
          101 => 
          array (
            'name' => 'RetroTrades',
            'symbol' => 'retrotrades',
            'description' => 'RetroTrades is a nostalgia-fueled retro-gaming community. All of our unique collectibles generate RetroBits ($RTRO), our in-house currency. We have a LOTS of things planned for $RTRO! Join the Discord, start collecting and get ready to have some fun!',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/c382cb4f357c33f5450a2939ccc41413/74a5e776',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/Retro_Trades',
              'discord' => 'https://discord.gg/retrotrades',
              'website' => 'https://retrotrades.com/',
            ),
          ),
          102 => 
          array (
            'name' => 'A Basic Ape',
            'symbol' => 'a_basic_ape',
            'description' => 'A bunch of Basic Apes - time travelers from a pixelated dimension - escaping their future to save ours. The consequence of testing the laws of physics? The Mutant Ape.
        
        Follow A Basic Ape as they journey through the Solana Blockchain...',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/d486dd9610e523ffa2fca8e2c540517f/52564b96',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/ABasicApe',
              'discord' => 'https://discord.gg/abasicapeclub',
            ),
          ),
          103 => 
          array (
            'name' => 'BucketHeadz Family',
            'symbol' => 'bucketheadz_family',
            'description' => 'A collection of BucketHeadz lost on Solana. Powered by $buckt - future of finance.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/acc04fef4f619242d8b3004c8f3b37fd/8b148b59',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/BucketHeadzNFT',
              'discord' => 'https://discord.gg/AvG9T3YBeG',
              'website' => 'https://bucketheadz.xyz/',
            ),
          ),
          104 => 
          array (
            'name' => 'Blockasset',
            'symbol' => 'blockasset',
            'description' => 'Blockasset are an official athlete NFT and token ecosystem including a marketplace, social platform and DEX. Purchase a Blockasset NFT for priority access to athlete tokens.
        ',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeicd3bf5tvzqkzpsnwdfbrv6iidiyu7kht5pmttfwue5g2u3xkx5am.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/blockassetco',
              'discord' => 'https://discord.gg/9FZ3j6ZmsG',
              'website' => 'https://linktr.ee/blockasset',
            ),
          ),
          105 => 
          array (
            'name' => 'Eternal Underworld',
            'symbol' => 'eternalunderworld',
            'description' => 'Eternal Underworld is a collective ecosystem of reapers, lions, potions, mutants and eternals. Together we make up one of the strongest communities on solana. ',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreihl6v4w5dvcyzdooivvn2usu3m6uv6eumk6npgre4x663tpm4kepm.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/ETERNALUNFT',
              'discord' => 'https://discord.gg/UKweNQCDZV',
              'website' => 'https://www.daku-reapers.com/',
            ),
          ),
          106 => 
          array (
            'name' => 'Buddiezz',
            'symbol' => 'buddiezz',
            'description' => 'Buddiezz is a boutique community of culture creators.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreic3cmyzyphg4av7cxwov6konwsefu2yln56dxyidimxtnnuph33oy.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/Buddiezz1',
              'discord' => 'https://discord.gg/GHjqfRYZW4',
              'website' => 'https://buddiezznft.club/',
            ),
          ),
          107 => 
          array (
            'name' => 'Alpha Gorillas',
            'symbol' => 'alpha_gorillas',
            'description' => 'Alpha Gorillas is a deflationary NFT collection. Hold an Alpha and dive into the exciting story of the upcoming Unreal Engine 5 story game, earn income through a renting system, get regular Solana airdrops through the revenue sharing AlphaPad, stake your Alpha and earn the utility Alpha token which you can use to purchase power ups, items and future collections.
        
        ',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeiaijbfnpmbtntpz3fi2up2m7tdvyk7u6dsmtiinu5jmdvd7xm43ym.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/Alpha_Gorillas',
              'discord' => 'https://discord.gg/sne8ty7Abs',
              'website' => 'https://www.alpha-gorillas.com/',
            ),
          ),
          108 => 
          array (
            'name' => 'Mushie Kingdom',
            'symbol' => 'mushie_kingdom',
            'description' => 'Come trip with the Mushie gang! Good vibes, high energy and passion is just the beginning...',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/e6801334b008b48bc99fb895ca9ba296/427d3906',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/magic_mushies',
              'discord' => 'https://discord.gg/QT8TX7QDt2',
              'website' => 'https://magicmushies.io/',
            ),
          ),
          109 => 
          array (
            'name' => 'BASED',
            'symbol' => 'based',
            'description' => 'Message Party is now Based. Your home in Web3. Growing our community and platform with all the signal, none of the noise.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreihswig2xkkh5xvhmfwm2pgz44a5s2hrrsfmz552psrvzmdlfouyju.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/getbased',
              'discord' => 'https://discord.gg/getbased',
              'website' => 'https://getbased.com/',
            ),
          ),
          110 => 
          array (
            'name' => 'Surfers',
            'symbol' => 'surfers',
            'description' => 'The first human pfp on Solana and the OG residents of Solana Beach. Whoopah!',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeieohb4ccx5gt5kiuz3gjrcdap5rzuwc63uzcwk5aqu6l2qractqli.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
            ),
          ),
          111 => 
          array (
            'name' => 'Curious Creature Collective',
            'symbol' => 'curious_creature_collective',
            'description' => 'The creative collections of Quadriplegic Mouth Painting Artist @CruiseyBabbby & participating Artist Incubator Artists that make up the Curious Creature Collective',
            'assets' => 
            array (
              'bannerImage' => 'https://cdn.discordapp.com/attachments/960558537505919096/972938549206851644/994C4FFF-A20B-4BCD-B801-7A8262AE91F1.jpg',
            ),
            'links' => 
            array (
            ),
          ),
          112 => 
          array (
            'name' => 'OgreCrew',
            'symbol' => 'ogrecrew',
            'description' => 'Ogre Crew is an artbase that aims to be the main source for the artist/graphic design needs of Solana Blockchain.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreiepdi727iu7luo6vtad6x566ceeqb2hkklatd2v6udtupcsgupe44.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/OgreCrew',
              'discord' => 'https://discord.gg/JQB98mgUg6',
            ),
          ),
          113 => 
          array (
            'name' => 'The StrandedVerse',
            'symbol' => 'strandedverse',
            'description' => 'Leveling up in one game evolves your character for all games. The StrandedVerse is a Layered game ecosystem where you collect Traits by playing, then you Fuse, Sell, or Burn those Traits on the Layer1 Dashboard to evolve in different ways.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreietl5spfnvzfmxcjl3mjx2wd5belja7fa625ykd7zhseizvilru6a.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/strandedverse',
              'discord' => 'https://discord.gg/strandedverse',
              'website' => 'https://strandedverse.com',
            ),
          ),
          114 => 
          array (
            'name' => 'Aces',
            'symbol' => 'aces',
            'description' => 'Our Aces Collections! Aces NFT, the playing card NFT to use in our Poker Rooms, and Card Sharks, our PFP and DAO collection. ',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeib2q3n5nlczem27hf7qkopq7htqeqhqumegqzjruq22mdnndcx5gi.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/theacesnft',
              'discord' => 'https://discord.gg/95edDnq7aV',
              'website' => 'https://theacesnft.com/',
            ),
          ),
          115 => 
          array (
            'name' => 'Kaotic Kronic',
            'symbol' => 'kaotic_kronic',
            'description' => 'Our utility offers holders access to our staking platform which earns $THC as passive income. The platform also allows holders to burn unwanted NFTs in exchange for $THC. Gen 2 will consist of Gen 1 & 1.5 buds in 3D animation that will be bringing music to the Solana blockchain from established artists. Elite Kronic holders will have a place in our exclusive $THC DAO. What are you smoking on the way to the moon?',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreihvpz3vx23m6hsucly7sfdfxy6ep34wx4sejoptjchcw7kau3oucq.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/Kaotic_Kronic',
              'discord' => 'https://discord.gg/yHQCpf3fpp ',
              'website' => 'https://www.kaotickronic.com/',
            ),
          ),
          116 => 
          array (
            'name' => 'Hidden Boyz',
            'symbol' => 'hidden_boyz',
            'description' => 'A collection of 1555 unique hand drawn Hidden Boyz. Living in their own reality from inside the bag. Join them on their quest to bring physical assets to our virtual world. Stay Hidden.
        
        ',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreidwkfph3qotu2j5mbp6ebmf5k6xg4kqtvalhjm6c23lc4zz7xfmwy.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/hiddenboyznft',
              'discord' => 'https://discord.gg/hiddenboyz',
            ),
          ),
          117 => 
          array (
            'name' => 'Psyker',
            'symbol' => 'psyker',
            'description' => 'Psyker is an innovative and action-packed fighting game with multi-layered combat mechanics with power-ups, item attributes, and Psyker Mode. Step into an ever-evolving game universe called the Psykerverse.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeiegf6fmuczszaazhfh26bexiu64knvgrk27mgrbdpdulsioxzw6k4.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/psykergame',
              'discord' => 'https://discord.gg/psykergame',
              'website' => ' https://psyker.game',
            ),
          ),
          118 => 
          array (
            'name' => 'Communi3',
            'symbol' => 'communi3',
            'description' => '5,001 Mad Scientists creating the formula for vibrant, engaged, and collaborative communities through technology.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeibbarsqxqdgq6lop5pbxywe6jfemjf7qc3jgbjg2ugdufotqurs2m.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/communi3_io',
              'discord' => 'https://discord.gg/communi3',
            ),
          ),
          119 => 
          array (
            'name' => 'Scumbags',
            'symbol' => 'scumbags',
            'description' => 'The Scumbag$ project is ironically centered around good ethical practices with community driven goals. Holders can use our NFT Staking System to accrue $Drip. Get VIP Benefits by combining 2 Bag$ with a Slimeball$ NFT to create a 1/1 Unique Mutation.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/aca9ac0f40e6c386cd648a504d09d71c/ebdb51bc',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/bhaleyart',
              'discord' => 'https://discord.gg/2YY4HmBqCF',
              'website' => 'https://t.co/naV8lkxZcA',
            ),
          ),
          120 => 
          array (
            'name' => 'Detown',
            'symbol' => 'detown',
            'description' => 'A fun and addicting Play-to-Earn game on Solana for all ages. Plant and grow your crops to the top, and become the best farmer in town!',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeigkrc2mwr6pip5yratkkc2lrpg5tbnrnv3e6c3urgqe6i2eaw2ura.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/detown_io',
              'discord' => 'https://discord.gg/jjMuncsZgX',
              'website' => 'https://www.detown.io/',
            ),
          ),
          121 => 
          array (
            'name' => 'Pompeizz',
            'symbol' => 'pompeizz',
            'description' => 'Pompeizz is a city, lost in the galaxy, where everything is petrified (well… is it really?). 
        
        It’s dusty down here… It looks like nothing has happened for hundreds of years.. 
        
        But, as surprising as it may seem, an alien colony has taken over the place, and is building a huge excavation site and a bunch of large buildings…
        
        I guess they know something we don’t… 🛸',
            'assets' => 
            array (
              'bannerImage' => 'https://cdn.discordapp.com/attachments/967100465219244062/968434251521478656/Caroussel_ME.jpg',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/pompeizz',
              'discord' => 'https://discord.gg/invite/pompeizz',
            ),
          ),
          122 => 
          array (
            'name' => 'Yume Labs',
            'symbol' => 'yume_labs',
            'description' => 'Innovative multi-project DAO on the blockchain. Working on NFTs, utility, tooling, and metaverse gaming.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeidub6333jwqvgeqhvi4u5gaxk6udv5p67irwo7ininodaxi4feque.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/Yume_Labs',
              'discord' => 'https://discord.gg/Yume-Labs',
            ),
          ),
          123 => 
          array (
            'name' => 'Taco Cat',
            'symbol' => 'tacocat',
            'description' => 'Originally launched September 9th, 2021 and celebrating Taco Tuesday\'s ever since.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreiawkr2tm5k7n6fbktdl2h6yzaov6je45csikclrsu6nsexb6bizly.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/Taco_Cats_NFT',
              'discord' => 'https://discord.gg/6a6pSwJ3',
            ),
          ),
          124 => 
          array (
            'name' => 'Robo Cocks',
            'symbol' => 'robo_cocks',
            'description' => 'Here to take over, with only 3,838 Robo Cocks and 1,280 Fortis Cocks to ever be manufactured, radiating with $RICE energy. The Cocks are here to bridge the gap between creators, consumers and investors by building a one-stop hub of a marketplace, while safeguarding the Solana space.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeiccbmrylw4ngzw4hh5b6xq5vlx6tegc3zy42qndvrekshpyqhqmjy.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/RoboCockNFT',
              'discord' => 'https://discord.gg/robococknft ',
              'website' => 'https://www.robocock.io/',
            ),
          ),
          125 => 
          array (
            'name' => 'Joseph Taylor Art',
            'symbol' => 'josephtaylorart',
            'description' => 'code-generated artwork only on solana',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/e29518bb72176f7de84d7d170668c6d3/87211ba2',
            ),
            'links' => 
            array (
            ),
          ),
          126 => 
          array (
            'name' => 'SolCraft',
            'symbol' => 'solcraft',
            'description' => 'SolCraft is a P2E Action-RTS game. Play as one of several different races with multi-utility including but not limited to direct earning through playing game or passively via staking or breeding. Battle Animals will aid you in your quest to save Solania. If you are wealthy enough to own a Land parcel, you will be able to control the taxes for those who mine on your land through a land dashboard system. Craft, build, mine and battle to level up your NFTs.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreig366qye7v5rfikbugenmyg7pcbalzzztib3wvrgm65ongac52cbi.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
            ),
          ),
          127 => 
          array (
            'name' => 'Corrupted Dogs',
            'symbol' => 'corrupted_dogs',
            'description' => 'The DEA Dogs have been corrupted by the mobsters. 
        A Solana NFT project that brings digital art to the next level.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeibzp6qg664r7bug5clbhyselyxs5s6xtrcwethycwppamade7fu6y.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
            ),
          ),
          128 => 
          array (
            'name' => 'Visionary Studios',
            'symbol' => 'visionary_studios',
            'description' => 'Visionary Studios is a project development studio, bridging the gap between Web 2 and Web 3, building high-quality NFT projects with a focus on art, media, and entertainment.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeibhkl2dazodmcuyqb7sq24rlofw6ncrzsrenctyl4ilzuv6joiyoe.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/VisionarySolana',
              'website' => 'https://www.visionarystudios.io/',
            ),
          ),
          129 => 
          array (
            'name' => 'Balloonsville',
            'symbol' => 'balloonsville',
            'description' => 'Balloonsville is an art focused and community-driven NFT project with a gamified ecosystem fueled by $AIR, the native token. Explore the ever-expanding Loonverse full of mysterious destinations with exclusive utility and hidden surprises. Care to join the adventure?',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreihrtlkqu7ownbl3fara66lmbcszg62s5wz3tcb2pmawmwwmvkxzti.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/balloonsville_2',
              'discord' => 'https://discord.gg/balloonsville',
              'website' => 'https://balloonsville.xyz/',
            ),
          ),
          130 => 
          array (
            'name' => 'Dazed Ducks',
            'symbol' => 'ddmc',
            'description' => 'The DDMC includes our core DazedDucks 10,000 NFT collection, along with all other collectibles that get quacked up from the mind of Guava De Art! Each collection brings unique utilities to your journey across the galaxy and the time you spend in our Metagalactic Club on Planet Mallard... all you have to do is HODL!',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeicdtrbz4p4bmq4l3nefceh5wkjuldxixtvuf6g33w3jxpshai3mim.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/DazedDucks',
              'discord' => 'https://discord.gg/dazedducks',
            ),
          ),
          131 => 
          array (
            'name' => 'Cynova',
            'symbol' => 'cynova',
            'description' => 'Cynova are a community focused metaverse brand & Web3 incubator. We provide a multitude of services to the blockchain, all of which directly benefit our holders & the $NOVAX token.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeiggb4ormfzvtjso6cdzvuqiqxyet5r5dbpr623dlir3prpzq6j57q.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/The_Cynova',
              'discord' => 'https://discord.gg/aTcUNF6ZCs',
              'website' => 'https://cynova.io/',
            ),
          ),
          132 => 
          array (
            'name' => 'Solana Monke Rejects',
            'symbol' => 'solana_monke_rejects',
            'description' => 'A collection of 6000 individually rendered 3D Monkes which grant holders access to exclusive drops, projects, community, and more...',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreidrg5b5igvudh4pznttpudy5nqwlzdf63un66c3kmj7cajlypnoui.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/MonkeRejects',
              'discord' => 'https://discord.gg/MonkeRejects',
              'website' => 'https://t.co/TXAVR8OTDx',
            ),
          ),
          133 => 
          array (
            'name' => 'Project Eluüne',
            'symbol' => 'projecteluune',
            'description' => 'Project Eluüne introduces you to the world of Eleriah, a fantastic metaverse reality filled withdreamlike technological marvels, heroic tribes of monsters and gods, and a mystery spanning centuries. While exploring our world, players will be able to come together in TvT communities, build armies of unique creatures, and send them off to determine the fate of Eleriah. However, as we venture deeper into these fractured lands, we will find ourselves reconnecting with something ancient, profound, and unspeakably powerful. Something precious, lost long ago…',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeieys6zidj7xiygex6jjrm27dompy6sqqnwrdlpxxwdymnkm6gfptu.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/ProjectEluune',
              'discord' => 'https://discord.gg/eluune',
              'website' => 'https://t.co/AAWidhLVyH',
            ),
          ),
          134 => 
          array (
            'name' => 'CETS ON CRECK',
            'symbol' => 'cets_on_creck',
            'description' => 'It’s just a bunch of crecked cets, who’re upto a whole lot of rat shit that are livin’, and chillin’ and vibin’ together. They’re picking bullshit cetfights, posting their own mugshots, cet calling the cops and stirring whatever they can to keep the high going.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeih2ixmh4rohw6534tlq2bng3br4gywzmabw5ysrfa7jsm264z3lna.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/CetsOnCreck',
              'discord' => 'https://discord.gg/nY43gd7gMD',
              'website' => 'https://cetsoncreck.com/',
            ),
          ),
          135 => 
          array (
            'name' => 'Nekoverse',
            'symbol' => 'nekoverse',
            'description' => 'Nekoverse is a Solana-based, Mass multiplayer RPG P2E game. Each Neko NFT will represent one character to participate in the Nekoverse game. These NFTs also provide exclusive access to the Neko Lab site for breeding, multiple future airdrops of in-game assets and Beta Gameplay access.
        ',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeigfogkixrrpnk3wiyivxfleyhqwbrhevj4fnqxwuxqxvkuhqrf6gy.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/Nekoverse_NFT',
              'discord' => 'https://discord.gg/nekoverse',
              'website' => 'https://nekoverse.net/',
            ),
          ),
          136 => 
          array (
            'name' => 'Sol Kitties',
            'symbol' => 'sol_kitties',
            'description' => 'Sol Kitties is a prime quality and innovative Solana NFT project that comes with two collections, 2D for passive earnings and 3D for active earnings. The 3D Collection will have prime utility in our upcoming P2E Metaverse game. 
        On-chain $SKT IDO & Tokenomics is coming as our next building block.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreigug3b52xavxpa3m5ekfabopmwplgz7ekzxwwpnmmwhict25bsizy.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/SolKitties',
              'discord' => 'https://discord.gg/solkitties',
              'website' => 'https://www.solkitties.net/',
            ),
          ),
          137 => 
          array (
            'name' => 'The Supply Chain',
            'symbol' => 'thesupplychain',
            'description' => 'The Supply Chain Project is a Music, 1:1, & PFP Community based around award winning producer, songwriter and music artist Daramola\'s 4th studio album.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeieeiom6ox2wes3awqphvcn37uwjdrvnf3ifo3cqdzog7wodvafpgy.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/svpplychvn',
              'discord' => 'https://discord.gg/svplychvn',
              'website' => 'https://t.co/boIF4LJbaU',
            ),
          ),
          138 => 
          array (
            'name' => 'CryptoCream Studios',
            'symbol' => 'ccstudios',
            'description' => 'Starting out as a classic trading server, CC Studios aim to blur the line between crypto and NFT trading. A team of skilled web3 founders, NFT enthusiasts, DeFi goblins, and technical analysts creating a community with $CREAMY as its backbone.
        
        Join us or not, we’ll be working to empower our community of likeminded entrepreneurs with profitability never seen in the Solana NFT space. ',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeidxndrpamhrshm7ndo4deihokvcxgmiusk2xo6b2oxc74usvrq6mi.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/cryptocream__',
              'discord' => 'https://discord.gg/creamyfriends',
              'website' => 'https://creamyfriends.com/',
            ),
          ),
          139 => 
          array (
            'name' => 'GiraffeDAO',
            'symbol' => 'giraffedao',
            'description' => 'A Contribute-to-Earn Ecosystem. $ACA',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreiaif6ad4pdh5vdzs6wpdskow2emgycpww4qrhdfcfqbfqcvmykpbq.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'discord' => 'https://discord.gg/TbQmPdxvnm',
              'website' => 'https://generousgiraffes.com/',
            ),
          ),
          140 => 
          array (
            'name' => 'Meerkat Millionaires',
            'symbol' => 'meerkat_millionaires',
            'description' => 'Welcome to the Meerkat Millionaires! Launched in September \'21, Meerkats is an "OG" collection and the first "Utility" NFT on Solana with the idea of royalties to the community. Holding records for the most one-day and one-week volume in SOL history!',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/bf6e3165ebe7a3c378b4c8d76ba6ac96/1c5d4fdf',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/mmccsolana',
              'discord' => 'https://discord.gg/mmcc',
              'website' => 'https://linktr.ee/MeerkatMillionaires',
            ),
          ),
          141 => 
          array (
            'name' => 'Gnarly Gnomies',
            'symbol' => 'gnarly_gnomies',
            'description' => 'The OG of Solana, Gnarly Gnomies, pixelated multiverse called Gnomiez! 
        A long lasting strong community with GEN1 & GEN2 serving different utility.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/b28ecc595990c317b3769060bc239202/ae4d4f18',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/gnarlygnomies',
            ),
          ),
          142 => 
          array (
            'name' => 'Bobby Rabbits',
            'symbol' => 'bobbyrabbits',
            'description' => 'Bobby Rabbits is an expanding universe of characters generated from traits created by Los Angeles based street artist Bobby. The original 1,000 Bobby Rabbits, now known as OG Rabbits, earn 1 $CAROT coin per day. $CAROT is backed by a 2.5% royalty on not only the OG Rabbit sales, but on all future characters in the Bobby Rabbits universe, and is also funded through other activities such as our merch sales and Alpha Fund profits. The newest addition, Icy Rabbits, are a collection of 120 iced out rabbits hatched from Golden Rabbeggs earned by original holders!',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/672e621c809d00f0086bc89ec3110c1d/0aa83202',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/BobbyRabbits',
              'discord' => 'https://discord.gg/PfGQnKZqNa',
              'website' => 'https://www.bobbyrabbits.com/',
            ),
          ),
          143 => 
          array (
            'name' => 'CryptoCubs',
            'symbol' => 'crypto_cubs',
            'description' => 'Originally launched September 21st, 2021 as an art project, we developed a roadmap with our community to launch MAYC style mutation mechanics, first, on Solana. ',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/760f83265dbda9f7a66b2a6e8d466ffc/3476545a',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/cryptocubs_io',
              'discord' => 'https://discord.gg/cryptocubs',
            ),
          ),
          144 => 
          array (
            'name' => 'Dark Terminal',
            'symbol' => 'darkterminal',
            'description' => 'Dark Terminal is a platform which hosts multiple hacking themed games and a NFT minting service. Dark Terminal is bringing a new and innovative approach to NFT minting on Solana. Holders of our collection receive 50% from all secondary royalties and income generated through fees from our games and minting services.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/b6d1f5e2b87989b9a691b91ed6ec5658/076db7ca',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/DarkTerminalSol',
              'discord' => 'https://discord.gg/darkterminal',
              'website' => 'https://darkterminal.io/',
            ),
          ),
          145 => 
          array (
            'name' => 'Galactic Snakes',
            'symbol' => 'galacticsnakesociety',
            'description' => 'Stake your NFT from any of the Galactic Snakes collection and earn $TOXIN which can be used to enter into weekly raffles and auctions.  Fusion between 3d Galactic Snakes and Galactic Snake Breeding gens coming soon!',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreiemoflxg5fbhme6kj3fgeyjkwtpsjlobndniqa6d77frrzi344yxy.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/galactic_snakes',
              'discord' => 'https://discord.gg/galacticsnakesociety',
            ),
          ),
          146 => 
          array (
            'name' => 'Solana Money Boys',
            'symbol' => 'money_boys',
            'description' => 'Building the metaverse ',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreiguacenjzh76z5p2obsxtqa22fcrh23oy72k3abq63mkrtsl5keiy.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/SolanaMoneyBoys',
              'discord' => 'https://discord.gg/moneyboys',
              'website' => 'https://www.solanamoneyboys.com/',
            ),
          ),
          147 => 
          array (
            'name' => 'Underground Royalty Society',
            'symbol' => 'urs',
            'description' => 'Digital Art Collective. Delivering curated monthly releases.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreihdvhkgdhdsvpw3mfo5juehexf5sjfell5ge44auenv33uvlj5bai.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/The_URS_',
              'discord' => 'https://discord.gg/theurs',
              'website' => 'https://www.undergroundroyaltysociety.com/',
            ),
          ),
          148 => 
          array (
            'name' => 'SolJunk',
            'symbol' => 'soljunk',
            'description' => 'SoljunksNFT is a OG Solana NFT Project which aims to bring fun through pixel art meme Collections and funny p2e games.
        ',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/55ec894cfe78c70c184916018b3587f2/858c0a01',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/soljunksNFT',
              'discord' => 'https://discord.gg/JSsgZ5t8dj',
              'website' => 'https://soljunks.io',
            ),
          ),
          149 => 
          array (
            'name' => 'Pitbull Poker Tour',
            'symbol' => 'pitbull_poker_tour',
            'description' => 'Pitbull Poker Tour is a diverse community of deflationary degenerates taking over the Solana poker scene. Powered by the magic of $BLUFF, PPT is an ever-growing ecosystem with a primary focus of building long-term utility for everyone involved. There is only one rule of Club PPT, no taking yourself too seriously.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/b93357fd96ed9b12fca1e2bc9ffda7c6/581cf9ac',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/pitbullpokerSOL',
              'discord' => 'https://discord.gg/qcUNqwEXyE',
              'website' => 'https://www.pitbullpokertour.com',
            ),
          ),
          150 => 
          array (
            'name' => 'Bit Birdz',
            'symbol' => 'bit_birdz',
            'description' => 'Bit Birdz is a flock of 3,333 Bird NFTs that celebrate the power of the pixel, exclusive to the Solana blockchain.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreicg7dkw3fdl6i6yvwevsyteok5v4ayxlb7i3pg6tovkwa6mukz27y.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/bitbirdznft',
              'discord' => 'https://discord.gg/RFPX5dEqbq',
              'website' => 'https://www.bitbirdz.com/',
            ),
          ),
          151 => 
          array (
            'name' => 'Lost at Sea',
            'symbol' => 'lost_at_sea',
            'description' => 'The creative collections from Lost At Sea, an emerging brand dedicated to making our world a better place one $WAVE at a time.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreidk7pou5vubvzhutkdrytpeikk5hfqznauphhi3h6z7q7uaactcau.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/lostatseanft',
              'discord' => 'https://discord.gg/YKWAjxGgZd',
              'website' => 'https://lostatseanft.com/',
            ),
          ),
          152 => 
          array (
            'name' => 'VBA',
            'symbol' => 'vba',
            'description' => 'The Virtual Basketball Association (VBA) is the basketball league of the Metaverse. As a GM, your goal is to build the best team of players that compete in contests for rewards. It’s easy to get started by picking up a squad of 5 VBA Players or opening VBA Player Packs. It’s time to ball on the blockchain.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeibtfm55fizbd2tbjlshbxe232zl5sgyv3xkkunh2ok6nfmfnpebi4.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/vbagame',
              'discord' => 'https://discord.gg/vbagame',
              'website' => 'http://www.vbagame.com/',
            ),
          ),
          153 => 
          array (
            'name' => 'Orc Racing Club',
            'symbol' => 'orcracingclub',
            'description' => 'Welcome to the Orc Racing Club: the most exclusive club in Solana! Your Orc serves as your ticket into the HORDE universe...',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/27d81b94c8d4b9f38e6423e2c736f5f6/3cb184ef',
            ),
            'links' => 
            array (
            ),
          ),
          154 => 
          array (
            'name' => 'Creaturez',
            'symbol' => 'creaturez',
            'description' => 'Enter the whacky world of Creaturez through the mind of cartoonist @sphincterbob! Creaturez live in a P2E metaverse called Ballztopia, where $BALLZ and collectibles can be earned. Check out our WP: https://ben-j.gitbook.io/welcome-to-ballztopia/',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/6051fd8ddd0ab5f2c5c7a82abbaaf4f1/1e008aae',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/CreaturezNFT',
              'discord' => 'https://discord.gg/Nme6fXDTpV',
              'website' => 'https://linktr.ee/Creaturez',
            ),
          ),
          155 => 
          array (
            'name' => 'Cyber Samurai',
            'symbol' => 'cyber_samurai',
            'description' => 'Cyber Samurai writing DeFi Comic Books and building trading tools. ',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/764470bc80bede75f5d84499d9402f42/474f5f0f',
            ),
            'links' => 
            array (
              'website' => 'https://cybersamurai.xyz/',
            ),
          ),
          156 => 
          array (
            'name' => 'The Lion Cats',
            'symbol' => 'thelioncats',
            'description' => 'The Lion Cats is a community oriented project. Our goal is to create a large group of friends and build many many cool stuff for them. Vibes and constant development !',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/a52037864ce372cfd8050e648ee6fc77/fc37ff57',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/TheLionCatsNFT',
              'discord' => 'https://discord.gg/W56aXe6KXd',
              'website' => 'https://thelioncats.com/',
            ),
          ),
          157 => 
          array (
            'name' => 'Bohemia',
            'symbol' => 'bohemia',
            'description' => 'Bohemia is Solana\'s interactive NFT Art Fair that 5000 Bohemians call home. The project combines a unique 3D environment gallery concept with stunning art, tokenomics, staking and multiple burning mechanics. Besides our OG collection we have a sub collection of Deciphered Messages in a Bottle - which are Love Letters or Messages from a Spiritual Leader.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreidph6uy6w4zc2ljoyqiovcrjb5qv5tlndcxi7ps7q3i3kish5qgou.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/BohemiaArtFair',
              'discord' => 'https://discord.gg/CtqSaXsY64',
              'website' => 'https://www.bohemia.gallery/',
            ),
          ),
          158 => 
          array (
            'name' => 'Draygon',
            'symbol' => 'draygon',
            'description' => 'Draygon investing long-term and short-term NFTs with DraygonDAO. Draygon created one of Solana\'s largest investment wallet and DAO wallets and has built a diamond community by Draygon collections.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/173e0088ff6f75bb81ed789dbbbcf76d/2a86f7c0',
            ),
            'links' => 
            array (
            ),
          ),
          159 => 
          array (
            'name' => 'SoLads Gameverse ',
            'symbol' => 'solads',
            'description' => 'The first play-to-earn game that will be officially licensed by Hasbro where players can earn crypto and win blue chip NFTs.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreifzwsdqvjwjo7vvqvszpxrtxyyr2owrp7327rclfc3wwxpn4zfsqa.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/LadopolyNFT',
              'discord' => 'https://discord.gg/wbyBq3gADw',
            ),
          ),
          160 => 
          array (
            'name' => 'Cyborg Ape Society',
            'symbol' => 'cyborg_ape_society',
            'description' => 'In 2122, Apes are endangered species. Therefore, Dr.Apestein decided to work and experiment on apes to evolve and make them stronger, go back in time to save their ancestors from ruthless poachers. Only 1111 of Cyborg Apes were created, including 10 with special technology to be able to fight any enemy.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreibblw5yrcirjnepad7q5yecjnppm3r2umonhxyiwbh5v6rpyukg2i.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/CyborgApesNFT',
              'discord' => 'https://discord.gg/wunVdsjwZT',
              'website' => 'https://www.cyborg-apes.com/',
            ),
          ),
          161 => 
          array (
            'name' => 'Moshiheads',
            'symbol' => 'moshiheads',
            'description' => '3,000 Moshiheads sworn to protect the Solana space from evil sludge monsters.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreibz4ccegtopq7l5okdle5an2iwu75ysza363hwkeh4xb7ea5se6qm.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/Moshiheads',
              'discord' => 'https://discord.gg/moshiheads',
              'website' => 'http://moshiheads.com/',
            ),
          ),
          162 => 
          array (
            'name' => 'Otaku Origins',
            'symbol' => 'otakuorigins',
            'description' => 'An anime-based web3 multimedia franchise complete with comics, metaverse experiences, collaborative offerings, and gaming. Release your inner otaku.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/4a0ef62d530dacd20a48e9147074ba92/873d80a3',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/otakuoriginsnft',
              'discord' => 'https://discord.gg/E3vQQYRVTA',
              'website' => 'https://t.co/UBhKfCrahY',
            ),
          ),
          163 => 
          array (
            'name' => 'Zero G Labs',
            'symbol' => 'zeroglabs',
            'description' => 'Welcome to the Zeroverse, the home of Zero G Labs, the Creators of The Solanauts and the Premier Community for Space-themed NFTs on the Solana Blockchain. The Moon is only the first stop!',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeidm76ifwmoqhyywyxhkerukwqxy5kzm6vhjm64ig4smjc2oz5r6ii.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/ZeroGLabs',
              'discord' => 'https://discord.gg/xZqBna89gx',
              'website' => 'https://www.zeroglabs.io/',
            ),
          ),
          164 => 
          array (
            'name' => 'Enigma Expanses',
            'symbol' => 'enigma_expanses',
            'description' => 'Unique, high quality GAN made art on the Solana blockchain.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/1388beccac186ba4746139cb1f9f420a/d0cff100',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/EnigmaExpanses',
              'discord' => 'https://discord.gg/CsYr3gzmpJ',
              'website' => 'https://expanses.ai/',
            ),
          ),
          165 => 
          array (
            'name' => 'Aiternate',
            'symbol' => 'aiternate',
            'description' => 'Aiternate is a social centric metaverse that allows you to interact with your friends through P2E games, Art, and a fully customizable room - all while utilizing Aurora’s immersive graphism.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeibxcmct4rfvyywpv7hwtzgqewdzuriis7vexolin4uv5472figugi.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/AiternateNFT',
              'discord' => 'https://discord.gg/aiternate',
              'website' => 'https://aiternate.com/',
            ),
          ),
          166 => 
          array (
            'name' => '0xCthulhu',
            'symbol' => '0xcthulhu',
            'description' => 'Lovecraftian #NFTGaming! Creating an exciting story line with stylish mysterious art and a cool vision for the future',
            'assets' => 
            array (
              'bannerImage' => 'https://pbs.twimg.com/profile_banners/1444009418740404229/1638464661/1500x500',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/0xCthulhu',
              'discord' => 'https://discord.gg/72rnXaTBrh',
              'website' => 'https://0xcthulhu.io/',
            ),
          ),
          167 => 
          array (
            'name' => 'The ChurChain Trilogy',
            'symbol' => 'churchaintrilogy',
            'description' => 'A unique NFT ecosystem developed to empower the community. Stake them all to earn $SSST and participate into hosted Raffle & Events',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/e42342705375b55cf68a3fef70e138d8/77c63b27',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/SSSnfts',
              'discord' => 'https://discord.gg/SxDPXK5v45',
              'website' => 'https://solanasecretsociety.xyz/',
            ),
          ),
          168 => 
          array (
            'name' => 'Frakt',
            'symbol' => 'frakt_hq',
            'description' => 'FRAKT is a DeFi x NFT protocol that makes NFTs liquid, safe & accessible to everyone. Allowing to buy, sell, lend and get liquidity out of Solana NFTs instantly. Currently includes two collections: FRAKT - first generative art on Solana and Pawnshop Gnomies - first lending protocol. These collections allow holders to pay less fees, take better loans, access referral program, vote in DAO and access revenue generated',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreifc7yw2p4bxgoro6rwce5z7hwdu5gr76mte4yroyss4ryh3s26ejq.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/FRAKT_HQ',
              'telegram' => 'https://t.me/frakt',
              'website' => 'https://t.co/MfPzox7poQ',
            ),
          ),
          169 => 
          array (
            'name' => 'Odd Skull',
            'symbol' => 'odd_skull',
            'description' => 'An odd artist in an odd world',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeihdiy2j2chxzlwcjrhrt2da3lr5yyibe3ys5mwjrq2x63zfb3wrte.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/OddSkull_',
              'discord' => 'https://discord.gg/Pqyft8W7wD',
              'website' => 'https://oddskull.net/',
            ),
          ),
          170 => 
          array (
            'name' => 'Amoebits',
            'symbol' => 'amoebits',
            'description' => '1,788 Amoebits | Holders collect $MEEB used to mint additional NFTs on our marketplace!',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreifieinjpo6jelinwnywoftmi5hhz6mftajnl66w7j4cqv24vvd2em.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/amoebits',
              'discord' => 'https://discord.gg/amoebits',
              'website' => 'https://amoebits.io/',
            ),
          ),
          171 => 
          array (
            'name' => 'Matrica Labs',
            'symbol' => 'matrica_labs',
            'description' => 'Matrica Labs serves as an all-in-one intuitive experience for users and communities, connecting more than 200k Web3 identities since inception. Through our powerful & extensive suite of services, Matrica provides a platform that empowers individuals, communities, DAOs and marketplaces. Holding Matrica Labs: Pixels or Corrupted NFTs grants you access to our unified blockchain experience.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreihkoxl7ypzpqgsuq3gxwhixsdvrcopdqegfbhxmcgvszhjsc3esca.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/MatricaLabs',
              'discord' => 'https://discord.gg/matricalabs',
              'website' => 'https://matrica.io/matricalabs',
            ),
          ),
          172 => 
          array (
            'name' => 'Space Bums',
            'symbol' => 'space_bums',
            'description' => 'Space Bums is a collection of 10,000 unique NFTs on the Solana blockchain. Your Space Bum NFT will be your access pass to the community, future airdrops, and community perks such as voting on who goes to space! Our intent is to build the greatest community in the galaxy and to take Web 3.0 off-planet.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeicx3d3kkyfeiaag3nhyadprt332tas5o2yyprr55wt2an5voh2b4a.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
            ),
          ),
          173 => 
          array (
            'name' => 'Yawww',
            'symbol' => 'yawww',
            'description' => 'Yawww is Solana\'s #1 automated escrow service to trade NFTs. It allows parties to trade with each other safely by utilizing automated smart contracts. There are two collections that are run by Yawww, Quantum Traders and Solsteins. NFTs from both collection yield $YAW which is our native token in the Yawww platform.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreifys47xonqzsxrsne2h2f7wtzc7cxdpdhio7rq2qlxknun526ynd4.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/YawwwNFT',
              'discord' => 'https://discord.gg/yawwwnft',
              'website' => 'https://www.yawww.io/',
            ),
          ),
          174 => 
          array (
            'name' => 'Rox Collective',
            'symbol' => 'roxcollective',
            'description' => 'Rox Collective is generative, data-driven sports memorabilia project. Each Rox is generated using authentic sports data and seeks to produce an artifact in celebration of the soul inside sports statistics.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/21b76a08ac2cada9b6e0f156c26980a6/195a64de',
            ),
            'links' => 
            array (
            ),
          ),
          175 => 
          array (
            'name' => 'Forgebots',
            'symbol' => 'forgebots',
            'description' => 'ForgeBots is a unique sci-fi collection of premium metaverse creations for the Solana blockchain. Our main collection is a series of 3333 robot avatars.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/430bf9c942ef234836c89359817363af/811d9781',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/forgebots',
              'discord' => 'https://discord.gg/nZmwCFbtC2',
            ),
          ),
          176 => 
          array (
            'name' => 'Portals',
            'symbol' => 'portals',
            'description' => 'The Metaverse on Solana. Explore downtown, invite friends, chat, build, show off your NFTs — right in the browser.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeif4allnsvudih2xyi6lu37px627ct4kduure7jsftjm76kp3ufbui.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/_portals_',
              'discord' => 'https://discord.gg/9uMBaCPW3f ',
              'website' => 'https://theportal.to/',
            ),
          ),
          177 => 
          array (
            'name' => 'Omens of Olympus',
            'symbol' => 'omens_of_olympus',
            'description' => '999 Omens of Olympus: Freed from the chains of Tartarus, digging for $STYX and Ancient Artifacts.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeihy2wew23y4y5mlooxyss7bs7igh2m7vligtbbuswhbapyt4aa43q.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/O_M_E_N_S',
              'discord' => 'https://discord.gg/jkYNtg3Rx2',
              'website' => 'https://omens.art/',
            ),
          ),
          178 => 
          array (
            'name' => 'Cyber Pharmacy',
            'symbol' => 'cyber_pharmacy',
            'description' => 'Utility-based NFTs for cannabis, psychedelics, medicinal plants and more. The Cyber Pharmacy ecosystem consists of unique NFT collections that offer real-world value and perks. It’s time to decentralize your mind, body, spirit and wallet.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeibkbduustwl5qr5txwojjqjzfmwi2dtz477p77yx54mcgcj6t4azq.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/cyber_pharmacy',
              'discord' => 'https://discord.gg/cyberpharmacy',
              'website' => 'https://cyberpharmacy.io/',
            ),
          ),
          179 => 
          array (
            'name' => 'Village of Sol',
            'symbol' => 'village_of_sol',
            'description' => 'A generative collection of horrors hidden deep in the Solana blockchain.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/99c03ea5b298b29f16e4ae7bc74771cc/c357434d',
            ),
            'links' => 
            array (
            ),
          ),
          180 => 
          array (
            'name' => 'Gorecats Collections',
            'symbol' => 'gorecats_collection',
            'description' => '1,111 highly collectible Gorecats from Emmy winning duo StudioNX. With a zombie staking game, merch and an interactive murder mystery comic with a roadmap to animated series.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeiby33mgpsh2ditvaa6f5i7g6of6xdm5uql3ylsgwvek3ec6fgdw7e.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/GORECATS',
              'discord' => 'https://discord.gg/5v2v34rzxA',
              'website' => 'https://www.gorecats.io/',
            ),
          ),
          181 => 
          array (
            'name' => 'Cyborg Iguanas',
            'symbol' => 'cyborgiguanas',
            'description' => 'Cyborg Iguanas are 2222 Iguana NFTs in space ready to conquer the Iguanaverse. Each Iguana enables holders to participate in our unique deflationary gamefi missions. Stake an Iguana for a daily reward of our utility token $CORE. Board into cosmic space and equip items in search of the coveted Iguana eggs which hatch into adorable but deadly baby Iguanas.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreihgbuowbsgrxbkx4a2ql7r3bquuy6xiijyoyeoxikk4z7yrbvi764.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/CyborgIguanas',
              'discord' => 'https://discord.gg/cyborgiguanas',
              'website' => 'https://www.cyborgiguanas.com/',
            ),
          ),
          182 => 
          array (
            'name' => 'Zankoku Labz',
            'symbol' => 'zankoku_labz',
            'description' => 'Zankoku Labz are a multi-collection NFT consisting of Fairyz, Cybogrez their homes and the children they will bring into this world. These collections allow you to Stake, Upgrade, Breed, and play our in house games with our native token. The world of Zankoku is just beginning with our 2D Pixelated PvP Multiverse P2E Game... Welcome to the Zankokuverse!',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreigaxozs7u7lwgtloht6j2be3qip7ub7sz6z3gelrwhvjj726dbh54.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/ZankokuLabz',
              'discord' => 'https://discord.gg/zankoku',
              'website' => 'https://zankokuarena.io/',
            ),
          ),
          183 => 
          array (
            'name' => 'Generous Robots',
            'symbol' => 'generous_robots',
            'description' => 'A collection of 5555 Generous and Space Robots. $GEAR is a backbone of the Robots ecosystem and a bridge between two collections. Get $GEAR by staking robots!',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreigcnnzx64idaayam5wlzrzgalszzh52w7znimfwtszg5i34xuejca.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/GenerousRobots',
              'discord' => 'https://discord.gg/mgk3A7PD86',
              'website' => 'https://generousrobots.com/',
            ),
          ),
          184 => 
          array (
            'name' => 'Xapes Lab ',
            'symbol' => 'xapes_lab',
            'description' => 'We are a community of Xapes, Yapes and breeding for Zapes (Yapes gives you 20% profit sharing and Zapes 5 % ). Our news App Sol Shorts(holders profit sharing 25%) launching on IOS and android brings news in 80 words.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/d54e0f2947b4a21580686f685f51bb0d/7f8fb0aa',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/xapeslab',
              'discord' => 'https://discord.gg/FmMrvKXY',
              'website' => 'https://staking.xapeslab.com/',
            ),
          ),
          185 => 
          array (
            'name' => 'Diamond Town Heads',
            'symbol' => 'dth',
            'description' => '5,000 Headers in town will make a living by earning $HAIR and take part in the DAO.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/f9647ff5a1977242f3c1bb55abd16be4/c8fa6436',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/soldiamondheads',
              'discord' => 'https://discord.gg/diamondtownheads',
              'website' => 'https://diamondtownheads.io/',
            ),
          ),
          186 => 
          array (
            'name' => 'Immutable Image',
            'symbol' => 'immutable_image',
            'description' => 'Immutable Image, founded in April 2021, is dedicated to bringing iconic photography direct from photographers into the NFT ecosystem in innovative and accessible ways. Our mission is to support both the photographic and NFT communities by building a new and diverse group of collectors for this culturally vital visual art form.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreic3bv34thrervj2r5mju4xnaqsosjnjmntosomgz4i65udoo2cexa.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/immutableimage',
              'discord' => 'https://discord.gg/Pwx5QVfpK2',
              'website' => 'https://www.immutableimage.com/#/',
            ),
          ),
          187 => 
          array (
            'name' => 'Drunken Ape Social Club',
            'symbol' => 'drunkenapesc',
            'description' => 'Drunken Ape',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeihuqsj2u5ybjpapccm35xvvydlmiui7swgmn6dh5xatyhw3y3ncvy.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/DrunkenApeSC',
              'discord' => 'https://discord.gg/veE8b428YN',
              'website' => 'https://www.drunkenapesc.com/',
            ),
          ),
          188 => 
          array (
            'name' => 'Baby Ape Social Club',
            'symbol' => 'babyapesocialclub',
            'description' => 'Limited collection of 5000 Baby Apes and 5000 Baby Tigers that reside on Dab Island, located in the heart of the Bermuda Triangle. Adopt a pair to really benefit from the Alien invasion. Collect $DAB to get access to the ecosystem. Utility first.',
            'assets' => 
            array (
              'bannerImage' => 'https://i.imgur.com/baSkfFG.jpeg',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/BabyApe_SC',
              'discord' => 'https://discord.gg/2uNZYSKvsw',
              'website' => 'https://babyapesocialclub.com/',
            ),
          ),
          189 => 
          array (
            'name' => 'Goldies',
            'symbol' => 'goldies',
            'description' => 'A deflationary collection of loveable fish that Just Keep Swimming.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/5adeb3f0e4ac67725dd201926f5a1943/786a18f3',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/GoldiesNFT',
              'discord' => 'https://discord.gg/HJu8Txy6xM',
            ),
          ),
          190 => 
          array (
            'name' => 'Artpunks',
            'symbol' => 'artpunks',
            'description' => 'ArtPunks is a brand and community, bound by our love of art, NFTs, and having fun. The ArtPunks collection comprises: ArtPunks NFT; Frames NFT; and NFThodlZone, and is powered by the $ARTE token - with innovative utilities in constant development!',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/c5090cec973ff517cc836e8918878421/a094446c',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/ArtPunksNFT',
              'discord' => 'https://discord.gg/artpunks',
              'website' => 'https://artpunks.fun/',
            ),
          ),
          191 => 
          array (
            'name' => 'Succuverse',
            'symbol' => 'succuverse',
            'description' => 'In the darkest parts of hell roams the mystical succubus, satanic creatures whom feed upon the sexual energy of their victims. Their home "The Underworld" has been cursed, their demonic civilization has been wiped out and only 1111 succubi remain.
        ',
            'assets' => 
            array (
              'bannerImage' => 'https://pbs.twimg.com/profile_banners/1489398238184620037/1644792396/1500x500',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/succuverse',
              'discord' => 'https://discord.gg/succuverse',
              'website' => 'https://www.succuverse.com/',
            ),
          ),
          192 => 
          array (
            'name' => 'Solsteads & Citizens',
            'symbol' => 'solsteadsnft',
            'description' => 'Solana\'s surreal estate. A beautiful home and exclusive gallery for your NFTs.',
            'assets' => 
            array (
              'bannerImage' => 'https://pbs.twimg.com/profile_banners/1433877043884744704/1630802995/1500x500',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/SolsteadsNFT',
              'discord' => 'https://discord.gg/gcfEuWC5wT',
            ),
          ),
          193 => 
          array (
            'name' => 'CryptoStraps',
            'symbol' => 'cryptostraps',
            'description' => 'CryptoStraps is a next-gen 3D animated NFT pushing all boundaries and breathing new life into the ecosystem with their innovative tech. Stake your CS for $AMMO. Use $AMMO to defuse, fuse and mint a future collection called MODS. Stake with our 0% Solana Validator and spend $AMMO for rendering services.',
            'assets' => 
            array (
              'bannerImage' => 'https://pbs.twimg.com/profile_banners/1441688129404952587/1643928686/1500x500',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/CryptoStraps',
              'discord' => 'https://discord.gg/cryptostraps',
              'website' => 'https://www.cryptostraps.io/',
            ),
          ),
          194 => 
          array (
            'name' => 'Shukutai Dinos',
            'symbol' => 'shukutai_dinos',
            'description' => '800 Shukutai Dinos remain on the planet, yet they\'re dying, fast. Every week an asteroid hits the Dinos\' planet and wipes out Dinos! To ensure their future existence, and prevent extinction, Dinos need to breed! The Shukutai Hatchlings are the babies of the Shukutai Dinos!',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/2f94d7ac13489ae9c72b6483a51f0556/73e01ba9',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/ShukutaiDinos',
              'discord' => 'https://discord.gg/ZTkWnvsygq',
              'website' => 'https://shukutaidinos.com/',
            ),
          ),
          195 => 
          array (
            'name' => 'Undead Apes',
            'symbol' => 'undead_apes',
            'description' => 'Family of Undead Apes',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/9d646f1ec345fcc0420c36154fdccb80/32a883a9',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/UndeadApesDAO',
              'discord' => 'https://discord.gg/undeadapes',
            ),
          ),
          196 => 
          array (
            'name' => 'Angomon',
            'symbol' => 'angomon',
            'description' => 'Snazzy inhabitants of the Angoverse chilling on Solana',
            'assets' => 
            array (
              'bannerImage' => 'https://pbs.twimg.com/profile_banners/1441758134754676739/1647280945/1500x500',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/angomonNFT',
              'discord' => 'https://discord.gg/ffYjpakBWV',
              'website' => 'https://t.co/08yHMdkgfn',
            ),
          ),
          197 => 
          array (
            'name' => 'Solana Puppy Pound',
            'symbol' => 'solana_puppy_pound',
            'description' => 'Solana Puppy Pound is the Solana Blockchains first gamified staking algorithms. Different breeds of puppies fight for $TREATS dominance. SPP contains a Gen1 & Gen2 puppy collection along with a DAO research pass for future collections made by Solana Puppy Pound. ',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/12eee7fed61487577183fa6ccaa5bf91/6f69f86f',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/solpuppypound',
              'discord' => 'https://discord.gg/2cv4BYeZaJ',
              'website' => 'https://www.puppypound.io/',
            ),
          ),
          198 => 
          array (
            'name' => 'Degenerate Ape Academy',
            'symbol' => 'degenerate_ape_academy',
            'description' => 'Our mission here at the academy is simple: Take 10,000 of the smoothest brained apes, put them all in one location and let the mayhem ensue. The academy was founded on the principles of friendship making, crayon eating and absolute, unregulated, deplorable, degenerate behaviour. Welcome fellow apes, to the Degenerate Ape Academy.',
            'assets' => 
            array (
              'bannerImage' => 'https://i.imgur.com/RKt70TJ.jpg',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/DegenApeAcademy',
              'discord' => 'https://discord.gg/degenapeacademy',
              'website' => 'https://www.degenape.academy/',
            ),
          ),
          199 => 
          array (
            'name' => 'Monsterz DAO',
            'symbol' => 'monsterz_dao',
            'description' => 'A DAO of passionate people raising awareness on mental health and supporting the NFT artists ❤️
        Receive daily airdrops of $MNSTR to mint exclusive art pieces, help raise funds for meaningful charities, be part of the kindest DAO on Solana.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/afb769e31851dffb44974bbf011047d2/36a0d99d',
            ),
            'links' => 
            array (
            ),
          ),
          200 => 
          array (
            'name' => 'Bulldog Billionaires',
            'symbol' => 'bulldogs',
            'description' => 'Welcome to an alternate reality, where Bulldogs rule all! Left behind in this barren world is a peculiar matter called $BONE. Radioactive from the years past, 2000 Bulldogs have been tasked with harnessing $BONE to power the Bulldog kingdom.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/8f093d24124d51df183a45d75762d42e/af10d13b',
            ),
            'links' => 
            array (
            ),
          ),
          201 => 
          array (
            'name' => 'RuffLife Rescue',
            'symbol' => 'ruffliferescue',
            'description' => 'RuffLife Rescues; the brand bringing dogs to the metaverse.',
            'assets' => 
            array (
              'bannerImage' => 'https://pbs.twimg.com/profile_banners/1453868027787689986/1645483724/1500x500',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/rufflifenft',
              'discord' => 'https://discord.gg/3JpWtP57Ya',
              'website' => 'https://t.co/W5Wrff9hIf',
            ),
          ),
          202 => 
          array (
            'name' => 'Secret Sphinx Society',
            'symbol' => 'secret_sphinx_society',
            'description' => 'The Secret Sphinx Society is an elite, underground community of pre-approved members featuring a new and unique functionality called the "Binding." Creator royalties are bound to each specific Sphinx.',
            'assets' => 
            array (
              'bannerImage' => 'https://i.imgur.com/xlAIrLN.png',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/SecretSphinxes',
              'discord' => 'https://discord.gg/bEDwYAwJvs',
            ),
          ),
          203 => 
          array (
            'name' => '.SHADE',
            'symbol' => 'shade',
            'description' => '.SHADE is a creative Metaverse project built on Solana // with a strong focus on gaming development & unique NFT driven experiences',
            'assets' => 
            array (
              'bannerImage' => 'https://i.imgur.com/qvEZX6m.png',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/dotSHADE',
              'discord' => 'https://discord.gg/r7JXFXcgyX',
              'website' => 'https://www.dotshade.io/',
            ),
          ),
          204 => 
          array (
            'name' => 'CyberKatz',
            'symbol' => 'cyberkatz',
            'description' => 'CyberKatz is an exclusive collection of 2077 genetically mutated Katz launched into Space on the Solana Blockchain. Staking to earn $9LIVES, CyberKatz own native currency. Spaceship Building. DNA Altered CyberKatz. Not your average PFP.
        General Katzoid welcomes ALL to the family. This is just the beginning.
        To KATHALLA warriors!',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/864515a8e091c41c978e987624ee49ed/1a1c90c0',
            ),
            'links' => 
            array (
            ),
          ),
          205 => 
          array (
            'name' => 'MinerVerse',
            'symbol' => 'minerverse',
            'description' => 'The MinerVerse, a staking NFT collection consisting of 3 Miners and staking boosters. The greatest staking NFTs coming to Solana!',
            'assets' => 
            array (
              'bannerImage' => 'https://pbs.twimg.com/profile_banners/1485827388604887041/1645482919/1500x500',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/MonkeyMiners',
              'discord' => 'https://discord.gg/hURHKC9hZM',
              'website' => 'https://minerverse.org/',
            ),
          ),
          206 => 
          array (
            'name' => 'DeFi Land',
            'symbol' => 'defiland',
            'description' => 'DeFi, Gaming, NFTs and Metaverse reimagined in a new and all-in-one game🚜🚜🚜Join to farm, trade, compete, craft and more.
        
        Public beta is now open!',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/2e2266700997c709d12d970f4882304c/74cf805f',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/DeFi_Land',
              'discord' => 'https://discord.gg/defiland',
              'website' => 'https://linktr.ee/defiland',
            ),
          ),
          207 => 
          array (
            'name' => 'Subayai Snakes',
            'symbol' => 'subayai_snakes',
            'description' => 'Subayai Snakes is a community driven project with great vision and many plans. There is only one thing we are interested in, which is the impact on Solana\'s blockchain.',
            'assets' => 
            array (
              'bannerImage' => 'https://pbs.twimg.com/profile_banners/1469989422095548423/1645194084/1500x500',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/SubayaiSnakes',
              'discord' => 'https://discord.gg/subayaisnakes',
              'website' => 'https://t.co/39jitbtSpD',
            ),
          ),
          208 => 
          array (
            'name' => 'Electons',
            'symbol' => 'electons',
            'description' => 'Electons are an exclusive collection of 555 Electons and 555 Trippies on the Solana blockchain.
        The Skellies have a daily utility token airdrop (BZT), a lottery and more token burning mechanics.
        Trippies is the second gen. Gain $BZT by doing nothing 😉',
            'assets' => 
            array (
              'bannerImage' => 'https://i.imgur.com/OxnOfyP.jpg',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/Electons_',
              'discord' => 'https://discord.gg/electons',
            ),
          ),
          209 => 
          array (
            'name' => 'Tiny Colony',
            'symbol' => 'tiny_colony',
            'description' => 'Tiny Colony is a pixelated play and earn game built on the Solana blockchain, encompassing various game modes, events, and experiences; including the first-ever Construction and Management Simulation Blockchain Game.',
            'assets' => 
            array (
              'bannerImage' => 'https://i.imgur.com/9HMbxpD.jpg',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/TinyColonyGame',
              'discord' => 'https://discord.gg/bb7ztMRTga',
              'website' => 'https://tinycolony.io/',
            ),
          ),
          210 => 
          array (
            'name' => 'PixelBands',
            'symbol' => 'pixelbands',
            'description' => 'PixelBands is the first project on Solana that combines generative art and generative music. Collect Band Members, mint PixelBands, and utilize the music NFT tools of the future.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/4ed6a0f5fa7cdeceb536199ca95bfeec/4f209653',
            ),
            'links' => 
            array (
            ),
          ),
          211 => 
          array (
            'name' => 'McKenna\'s Heroes & Villains',
            'symbol' => 'heroes_and_villains_origins',
            'description' => 'McKenna\'s Heroes & Villains is a world of evolving NFTs, comic books and an upcoming P2E game! Check out our Origins, Passes and Comic Book collections!',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/f600ab3cf9b452a05219b14469eb6891/e273394d',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/HV_Origins',
              'discord' => 'https://discord.gg/masterbrews',
              'website' => 'https://t.co/PP2n8SwPQ7',
            ),
          ),
          212 => 
          array (
            'name' => 'MekaGorillaz',
            'symbol' => 'mekagorillaz',
            'description' => 'MekaGorillaz is the genesis collection from MekaDao, and the second generation is MekaChimpz.  Both have access to staking with rewards in $mek and member channels in discord. Game coming in 2022!',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/1e56b3fa2891fcfc89e7ba7e077a39c0/08bd2edd',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/MekaGorillaz',
              'discord' => 'https://discord.gg/FRJCd8bAqz',
              'website' => 'https://www.mekagorillaz.io/',
            ),
          ),
          213 => 
          array (
            'name' => 'Solluminati',
            'symbol' => 'solluminati',
            'description' => 'Building tools for the Solana Ecosystem. SOLLUMINATI project is focused on developing web 3.0 applications, the NFTs allowing access to various tools and features. The Eye is Watching!',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/d953b7b5add371b559dbe892c2dbcbd3/107e427c',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/SolluminatiNFT',
              'discord' => 'https://discord.gg/solluminati',
              'website' => 'https://solluminati.io/',
            ),
          ),
          214 => 
          array (
            'name' => 'Sea Shanties',
            'symbol' => 'sea_shanties',
            'description' => 'Created by Team Hydra. Sea Shanties is a defi Metaverse centered around $TRTN, the first Liquidity Backed Yield Token on Solana. $TRTN is backed by liquidity from an ecosystem of utilities, Art collections, and external revenue sources brought in through Hydra Launchpad and SeaDAO.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/8638ef6e22531dd70c9fa979ec4a33dc/409570f1',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/SeaShantiesSol',
              'discord' => 'https://discord.gg/seashanties',
              'website' => 'https://www.sea-shanties.com/',
            ),
          ),
          215 => 
          array (
            'name' => 'Kingdom of Dwarves',
            'symbol' => 'kingdom_of_dwarves',
            'description' => 'Season 1, 2, and 3 SOLD-OUT! Kingdom of Dwarves is a cinematic-quality NFTs created by Emmy and Academy Award-Winning artists with a portfolio of work including Game of Thrones, Westworld, and Gears of War.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/92a58fe896fd0b59ce93fc9c704cec82/f1219ca0',
            ),
            'links' => 
            array (
            ),
          ),
          216 => 
          array (
            'name' => 'Skullbots',
            'symbol' => 'skullbots',
            'description' => 'The Ultimate NFT Strategy Game: 
        DeFi + Game Theory
        Utility > Art
        Inspired by Hellish Tattoo Art and United in our mission to make all paper hands live a life of regret.
        
        VROOM VROOM',
            'assets' => 
            array (
              'bannerImage' => 'https://pbs.twimg.com/profile_banners/1446038395063504896/1642671105/1500x500',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/SKULLBOTS',
              'discord' => 'https://discord.gg/skullbots',
            ),
          ),
          217 => 
          array (
            'name' => 'The Lofts Business Club',
            'symbol' => 'tlbc',
            'description' => 'Building the Metaverse where business happens. Upgrading marketing and online shopping to web 3.0 through the Agora. A place for NFT projects and real-life companies to co-exist and develop. ',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/aeeeb5e210a080d90738caae35f10563/285a1d03',
            ),
            'links' => 
            array (
            ),
          ),
          218 => 
          array (
            'name' => 'Alder Academy',
            'symbol' => 'alderacademy',
            'description' => 'The Alder Academy lays in the city of Spellia and holds various collection\'s from Mages, Tomestones, Pets, and Dorms, each containing its own unique utility and role in the ecosystem. The entire Academy is powered by TOME, something every mage treasures and tries to hide from their ruler Odacar. The secrets behind the academy have yet to unfold, will you be the force that reveals them?',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeiafr2kn33zpgfzfbtihd36nsev66siyvnzu6piwuu26wdxguc7weq.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
            ),
          ),
          219 => 
          array (
            'name' => 'Mile High Ape Club',
            'symbol' => 'mile_high_ape_club',
            'description' => 'Mile High Apes is an Aviation/Traveling Based NFT project! With our NFT\'s you will earn $MILES token as our staking reward with the ability to exchange those $MILES for actual airline Miles to assist in your ability to travel the world. We also manufacture GF & Vegan treats labeled "Flight Bites" for the airline industry to provide as snacks in the planes and airports. Follow us on our journey in changing the way Airports and Airlines do business entering into the Web3 space with the help of our parent company, Inception.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeictsu5dobehbggagha4yejeb2npfmbafevwybpl64i5mboavovsnu.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
            ),
          ),
          220 => 
          array (
            'name' => 'Yaku',
            'symbol' => 'yaku_corp',
            'description' => 'Cyberpunk Metaverse across the whole Solana ecosystem.',
            'assets' => 
            array (
              'bannerImage' => 'https://i.imgur.com/iII33BT.png',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/YakuCorp',
              'discord' => 'https://discord.gg/yakucorp',
              'website' => 'https://www.yakushima.io/',
            ),
          ),
          221 => 
          array (
            'name' => 'Photo Finish Horse Racing',
            'symbol' => 'photo_finish_horse_racing',
            'description' => 'Own your own virtual horse! Photo Finish is an authentic horse racing game made by Third Time Entertainment Inc. where you can race, breed and sell horses in a player-owned digital ecosystem.',
            'assets' => 
            array (
              'bannerImage' => 'https://i.imgur.com/vMwCtRz.png',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/photofinishgame',
              'discord' => 'https://discord.gg/AsEMTAnJaS',
              'website' => 'https://photofinishhorseracing.com',
            ),
          ),
          222 => 
          array (
            'name' => 'Solana HODL Whales',
            'symbol' => 'solana_hodl_whales',
            'description' => 'The HODL Whales are fleeing Earth in the year 6969 trying to avoid extinction. They\'re on a search for their power source $KRILL that will be essential to sustaining their lives, their companions, and eventually their babies. Our model: breed, stake, earn.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/7f46d5fba26bb08497c278b526ba4b0a/ab43a51b',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/SolanaWhalesNFT',
              'discord' => 'https://discord.gg/solanahodlwhales',
              'website' => 'https://solanahodlwhales.io/',
            ),
          ),
          223 => 
          array (
            'name' => 'Artificial Irrelevants',
            'symbol' => 'artificial_irrelevants',
            'description' => 'Welcome to Artificial Irrelevants! A universe that homes cute robot heads, baby robots, UFOs, weapons, and more. Collect pieces of the AI ecosystem to participate in lore-based events, and for special benefits in the soon-to-come Irrelevant Arcade.',
            'assets' => 
            array (
              'bannerImage' => 'https://cdn.discordapp.com/attachments/920684817421586482/951044765099638814/Banner.png',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/Irrelevants_NFT',
              'discord' => 'https://discord.gg/QSTZ2TAVnv',
              'website' => 'https://www.irrelevants.com/',
            ),
          ),
          224 => 
          array (
            'name' => 'Punky Apes Club',
            'symbol' => 'pac',
            'description' => '',
            'assets' => 
            array (
              'bannerImage' => 'https://pbs.twimg.com/profile_banners/1466515449579913218/1645708538/1500x500',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/punkyapesclub',
              'discord' => 'https://discord.gg/wZR2rHagDb',
              'website' => 'https://t.co/KjwX25aLma',
            ),
          ),
          225 => 
          array (
            'name' => 'Dope Pirates',
            'symbol' => 'dope_pirates',
            'description' => 'The Dope Pirates are building one of the most advanced systems on Solana - here to conquer the blockchain and establish a pirate republic! LFG, WAGMI!',
            'assets' => 
            array (
              'bannerImage' => 'https://i.imgur.com/dkpmOgK.png',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/dopepirates',
              'discord' => 'https://discord.gg/dopepirates',
              'website' => 'https://dopepirates.com/',
            ),
          ),
          226 => 
          array (
            'name' => 'Tiny Dogz',
            'symbol' => 'tiny_dogz',
            'description' => 'Tiny Dogz are a exclusive collection NFTs on the Solana blockchain featuring top pixel art, a staking system linked to a liquidity pool for passive earn, and a breeding game with token burning mechanics. Tiny Dogz have a collection of Tiny Dogz, Tiny Pupz, and soon Tiny Homes. We are building Tiny Town together as a community.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/ee3add694fae7129ed00f57e1b0dd34b/1d607e87',
            ),
            'links' => 
            array (
            ),
          ),
          227 => 
          array (
            'name' => 'Watch Your Crypto',
            'symbol' => 'watchyourcrypto',
            'description' => 'We at WYC are watch enthusiasts and technology addicts. We decided to put both of them together, and create a community of people with our same interests. We want to make collecting easy and fun again.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/b3a7a42bf7b18a0c2605d0a4d888da52/f305166d',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/watchyourcrypto',
              'website' => 'https://www.watchyourcrypto.io/',
            ),
          ),
          228 => 
          array (
            'name' => 'Women Out Of Tribe',
            'symbol' => 'women_out_of_tribe',
            'description' => 'Women Out Of Tribe is a women led community with utility token $WOOT planning to be a women’s lifestyle brand. Artists and friends - our point is to use the best experience and bring new visions with it. We want to connect some offline possibilities with the crypto world - as events, brand partnerships, merchandise, etc . WOOT project members will be able to take part in drops, design, suggest, vote and earn rewards through NFT staking.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/e52051aefec8e6e43833557a7c5d8408/3d90d4de',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/WomensPrideNFT',
              'discord' => 'https://discord.gg/womenspride',
              'website' => 'discord.gg/womenspride',
            ),
          ),
          229 => 
          array (
            'name' => 'Pot Heads',
            'symbol' => 'pot_heads',
            'description' => 'A fun, unique collection of Pot Heads just waiting to sprout! Combine your Pot Head with Plant Food on our website it\'ll sprout into a fully grown plant! What will your Pot Head sprout?',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreia7yidizl3nhqqfzimk4voq7j27zwk2zzezv4qdnigbv7mhp2royu.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/Bot_Head_NFT',
              'discord' => 'https://discord.gg/7P28mAcS2C',
              'website' => 'https://potheads-nft.com/',
            ),
          ),
          230 => 
          array (
            'name' => 'The Whitelist Project',
            'symbol' => 'the_whitelist_project',
            'description' => 'Get access to Premier Whitelist Opportunities, earn Passive Income from top Solana NFT Projects, and get a Custom 1/1 NFT from our PFP Collection.
        ',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/c492f34a4b387f7fa20a8f962f551de7/8d223eca',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/TheWLProjectNFT',
              'discord' => 'https://discord.gg/jyw5E4pfCJ',
              'website' => 'https://linktr.ee/thewhitelistproject',
            ),
          ),
          231 => 
          array (
            'name' => 'Monkish Rebellion',
            'symbol' => 'monkishrebellion',
            'description' => 'The Monkish were a band of fierce, loyal, and ruthless nomadic steppe monkes who once ruled the plains of ancient Chimpanzia. Some day they will rise again...
        This day has come. The war against the Normies has begun.  $KISH stolen will be returned, the Monkish way of life will be reinstated to it\'s former glory. Their degenerate lifestyle will live on forever. UKAI UKAI!',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/324fcc395f0f8b620f708f3d52a148de/45ef6ff8',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/MonkishRebel',
              'discord' => 'https://discord.gg/monkish',
              'website' => 'https://monkishrebel.com/',
            ),
          ),
          232 => 
          array (
            'name' => 'Such Shibas',
            'symbol' => 'such_shiba',
            'description' => 'Community First🤝, Moon Second🚀, Art Forever💫 
        The OG shibas on #Solana #borkbork ',
            'assets' => 
            array (
              'bannerImage' => 'https://pbs.twimg.com/profile_banners/1431368267663298563/1643651911/1500x500',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/SuchShibas',
              'discord' => 'https://discord.gg/sapFNmyiiI',
            ),
          ),
          233 => 
          array (
            'name' => 'Geisha Labs',
            'symbol' => 'geishalabs',
            'description' => 'a project, a brand, a platform, having one of Geisha Labs collections give special access to merging on-chain and IRL utility.
        Join the Community, do a Quest and earn $CLAN.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/0934f6943843fbb5960413859fae6c0d/1d41dd0f',
            ),
            'links' => 
            array (
            ),
          ),
          234 => 
          array (
            'name' => 'Meta Drago',
            'symbol' => 'meta_drago',
            'description' => 'Meta Drago is an exclusive collection of 999 SOL Intelligence Network Dragos with uniquely created art, staking platform, a great community with all the best helpful things preparing your journey for solana NFTs.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/57c06567523b5fefeb0096c3975456a9/24f5dd07',
            ),
            'links' => 
            array (
            ),
          ),
          235 => 
          array (
            'name' => 'Solizens',
            'symbol' => 'solizens',
            'description' => '1,111 Cyber Citizens living on the Solana blockchain. Solizens aren\'t just your usual PFP... With staking, mutation and other utilities, Solizens stay pushing P. Do you have what it takes to Enter The Capitol?',
            'assets' => 
            array (
              'bannerImage' => 'https://pbs.twimg.com/profile_banners/1470889860080803846/1643637736/1500x500',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/solizens',
              'discord' => 'https://discord.gg/DqJ5jAUQbG',
            ),
          ),
          236 => 
          array (
            'name' => 'The Savanna',
            'symbol' => 'the_savanna',
            'description' => 'The Savanna is a herd of NFT collections whose primary goal is to provide back to our community & wildlife conservation through donations and the utility of our native token, $HERD. With a revamped team and a refocused approach, the herd is more dedicated than ever to provide a community that thrives on outreach & transparency. The Revival Has Begun.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/35df758da270def0254f9f933c157e6c/c2f37d27',
            ),
            'links' => 
            array (
            ),
          ),
          237 => 
          array (
            'name' => 'Stoned Apes',
            'symbol' => 'stoned_apes',
            'description' => 'Stoned Apes are conquering the Cannabis Industry with their utility token $PUFF planning to be a weed lifestyle brand. On Solana, they also work on tech like their own Incubator $ALL, web3 SaaS & an instant payment protocol. Join the crew.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/7e341bf8a35cc7fb3fb6c7fd47e77206/1aca6f85',
            ),
            'links' => 
            array (
            ),
          ),
          238 => 
          array (
            'name' => 'The Sol Army',
            'symbol' => 'the_sol_army',
            'description' => 'The Sol Army is a community-driven company with the objective to educate, innovate and pursue growth within Web3.
        ',
            'assets' => 
            array (
              'bannerImage' => 'https://i.imgur.com/zwI8zYz.png',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/The_Sol_Army',
              'discord' => 'https://discord.gg/thesolarmy',
            ),
          ),
          239 => 
          array (
            'name' => 'encrypted',
            'symbol' => 'encrypted',
            'description' => 'Encrypted is a network powered by 1000 Servers, all which passively generate $Crypt, the low supply, high utility governance token of the ecosystem. The Hackers VHS is your golden ticket, a permanent whitelist token for all future encrypted mints.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/211099ee4f7959ec70b28da2295f9f1d/8cb56115',
            ),
            'links' => 
            array (
            ),
          ),
          240 => 
          array (
            'name' => 'Galactic Gecko Space Garage',
            'symbol' => 'galactic_gecko_space_garage',
            'description' => 'GGSG is a Social Adventure Club of 10,000 space racing warrior geckos, featuring hand drawn art from renowned artist Gossip Goblin. Along with Enigma Crystals and Concordians, the Geckoverse aims to provide a welcoming home base for all things web3.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/9eb0ee4be1aae52c12290dc6b3c1a01f/922f3ddd',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/GalacticGeckoSG',
              'discord' => 'https://discord.gg/TheGeckoDAO',
              'website' => 'https://galacticgeckos.com',
            ),
          ),
          241 => 
          array (
            'name' => 'House of Parlay',
            'symbol' => 'houseofparlay',
            'description' => 'The House of Parlay is a vibrant and hyperactive NFT community endeavors to serve all blockchain communities with world-class online casino arcade gaming that delivers the smoothest and most enjoyable experience from beginning to end.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/2208894ffd75b3079f37eda99249c5e4/2ab0d359',
            ),
            'links' => 
            array (
            ),
          ),
          242 => 
          array (
            'name' => 'CATPUNK',
            'symbol' => 'catpunk',
            'description' => 'CATPUNK is where NFT utilities meet high-quality 3D arts. A metaverse project on Solana. We are building NEO3D .... ',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeiarbx2wsr3xy6trcqfemebd33nljphowvpznddph43ku3qkwtlxuy.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/CatPunkNFT',
              'discord' => 'https://discord.gg/invite/catpunk',
              'website' => 'https://www.catpunk.net/',
            ),
          ),
          243 => 
          array (
            'name' => 'Cat Cartel',
            'symbol' => 'cat_cartel',
            'description' => 'Dynamic Mix of Immersive, deflationary lore, Metaverse Integrations, P2E, Cartel Allegiance Systems and Staking! Experience our state of the art Staking platform to earn $Zion, Cat Cartel\'s native token in the $Zion Ecosystem. Cross Project Utility, Staking Multipliers, Breeding, Escrow and project longevity.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/f49d4250cbbec0907a62bb31f5298a88/66ea3173',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/SolanaCatCartel',
              'discord' => 'https://discord.gg/catcartel ',
              'website' => 'https://t.co/YijEidG0HS',
            ),
          ),
          244 => 
          array (
            'name' => 'MonkeLabs',
            'symbol' => 'monkelabs',
            'description' => 'MonkeLabs is a community of passionate people working hard to innovate the Solana Ecosystem.',
            'assets' => 
            array (
              'bannerImage' => 'https://i.imgur.com/UehmTqB.png',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/monkelabs',
              'discord' => 'https://discord.gg/RgdeB4StKM ',
              'website' => 'https://monkelabs.io',
            ),
          ),
          245 => 
          array (
            'name' => 'Psychic Warriors of Pappataz',
            'symbol' => 'psychic_warriors_of_pappataz',
            'description' => 'The 555 Psychic Warriors of Pappataz are the enlightened fighters at the heart of the Pappaverse. They have a deep connection to the Spirits of Pappataz. The Zombies of Zoo-P have recently joined forces with these brave psychic crusaders. Once you\'re in the Pappaverse you\'ll earn $PAPPA, which represents your ownership in the Pappataz Art Collective – a community fund for investing in great art on Solana.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/38673160de29e0d13ff49fced7ba40f8/c018c544',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/PappatazWarrior',
              'discord' => 'https://discord.gg/invite/zJWZyRjcMJ',
              'website' => 'https://t.co/GGsxdWkgMF',
            ),
          ),
          246 => 
          array (
            'name' => 'TOTE Club',
            'symbol' => 'tote_club',
            'description' => 'A community oriented project based on a rich lore foundation. The goal of TOTE Club is to bring investors and creatives closer together through mixed-multi media projects that lead to positive impact on the Solana NFT ecosystem.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/230e946148e8095adf86be331f0c6850/68421b58',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/tote_clubnft',
            ),
          ),
          247 => 
          array (
            'name' => 'Cryptonians World',
            'symbol' => 'cryptonians_world',
            'description' => 'Cryptonians World is a world of Cryptonians, their Babies, Ghosts, Vehicles, Houses and Audio NFT collections of the Cryptonians World Story. Cryptonians World collections are all deflationary and encoded on Solana blockchain.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/58e57ddc634043ef575260251ae450d1/24d40c48',
            ),
            'links' => 
            array (
            ),
          ),
          248 => 
          array (
            'name' => 'Goblin Laboratory',
            'symbol' => 'goblin_laboratory',
            'description' => 'The Goblin Laboratory is a first of its kind project that enables users to continually customize, update, and merge their experiments to create their own unique Goblin Experiments inside the the laboratory. Within the Goblin universe, users have access to Sentinels, a cyber-punk inspired collection of female avatars, as well as Pixel Goblins and Pixel Ratmen, which can be sent into battle against one another in the upcoming Goblin Coliseum game.',
            'assets' => 
            array (
              'bannerImage' => 'https://i.imgur.com/qatqqI8.jpg',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/GoblinLabNFT',
              'discord' => 'https://discord.gg/goblinlabnft',
              'website' => 'https://goblinlab.io',
            ),
          ),
          249 => 
          array (
            'name' => 'Sigh Ducks',
            'symbol' => 'sighducks',
            'description' => 'Sigh Ducks is much more than a PFP. It offers the most utility amongst ALL Solana NFT projects via staking & earning daily drops of $DOOK tokens, access to exclusive content & merch and The Grand Dook Casino - Solana\'s 1st Casino in the metaverse! 🦆',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/59cc929caaf1f20099c1306dbf948d9a/84817333',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/sighducks',
              'discord' => 'https://discord.gg/sighducks',
              'website' => 'https://sighducks.com/',
            ),
          ),
          250 => 
          array (
            'name' => 'Solsocks',
            'symbol' => 'solsocks',
            'description' => 'Collection of SolSock & SockPass launches',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/c390d32f7d7b5db0175db5dd9579e030/ba4337dc',
            ),
            'links' => 
            array (
            ),
          ),
          251 => 
          array (
            'name' => 'Sea Rovers Metaverse',
            'symbol' => 'sea_rovers_metaverse',
            'description' => 'Sea Rovers are a deflationary collection of unique pirate ship NFTs on the Solana Blockchain. Owners gain access to the live MetaPlunder play-to-earn game, DAO membership, and staking to earn the utility Rum Token ($RUMT). ',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/2220b0123ea1ea2cf9b1d15269a0d45a/4de1d02a',
            ),
            'links' => 
            array (
            ),
          ),
          252 => 
          array (
            'name' => 'Pixel Racers',
            'symbol' => 'pixel_racers',
            'description' => 'Pixel Racers is a multiplayer racing game with play-to-earn mechanics. Race with your Pixel Racers cars and engines in tournaments, paid races, and exhibition races to win NFT and SOL prizes.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/16ba65cd301236b9cc05273458f4f732/d1725364',
            ),
            'links' => 
            array (
            ),
          ),
          253 => 
          array (
            'name' => 'kam1',
            'symbol' => 'kam1',
            'description' => 'The mythical world of Izuno knew no strife, felt no hunger, and knew only bliss for centuries. That all changed when the demons attacked. ',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/538d089682fa8ac6feee127b10db213d/c2960b08',
            ),
            'links' => 
            array (
            ),
          ),
          254 => 
          array (
            'name' => 'Nyxxia',
            'symbol' => 'nyxxia',
            'description' => 'The World of Nyxxia where Infinity Serpents and Fancy Diamonds exist. Explore the mythical lore and synergizing utility between the two collections. ',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/fd341f285ad6c58708052b356542c57d/08c3fbda',
            ),
            'links' => 
            array (
            ),
          ),
          255 => 
          array (
            'name' => 'Glyph-Bound',
            'symbol' => 'glyph_bound',
            'description' => 'Glyph-Bound is an open-world MMORPG with Art inspired by Pokemon, Combat influenced by Final Fantasy Tactics, and a player-driven economy informed by Runescape!
        
        Track, Bind, Train and Battle elemental spirits called \'Kami\' in PvP Wager Matches and Prize Tournaments!
        
        Upgrade Kami into "Shiny" NFTs with limited supply based on their Rarity then trade them on the open market!
        
        Stake your Glyph-Bound NFTs to earn $KAYAC and mint more game-integrated NFTs!',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/c47cf86505627daa1c9dd061b1364261/7073ae2f',
            ),
            'links' => 
            array (
              'discord' => 'https://discord.gg/https://discord.gg/kayac',
            ),
          ),
          256 => 
          array (
            'name' => 'MetaForge',
            'symbol' => 'metaforge',
            'description' => 'Metaforge is a Metaverse built on top of Minecraft. Ghost Guys are your pass to get in & gain the best rewards from staking! You can buy land, hold DAO meetings, relax, battle, & earn! We aren\'t your average Metaverse project on Solana!',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeibawcynu4odvsf7cdvb753kl5y4ymzcpvss5hoif647r7m6k5heca.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
            ),
          ),
          257 => 
          array (
            'name' => 'Shipsgrave',
            'symbol' => 'shipsgrave',
            'description' => 'Shispgrave is a series of NFT collections based on Welcome to Shipsgrave, an illustrated anthology of Lovecraftian creepy short stories by nashotobi. Funds raised by these collections will fund further development of SHipsgrave IP.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/a70b27f5403b5a21920a24d6adf59594/cc892750',
            ),
            'links' => 
            array (
            ),
          ),
          258 => 
          array (
            'name' => 'Looks Rare Studio',
            'symbol' => 'looks_rare_studio',
            'description' => 'Looks Rare is a multi-disciplinary NFT agency/studio built to bridge the gap between existing IP and the NFT Metaverse. As a studio, our philosophy is to disrupt the NFT market with multi-functional assets grounded in real-world utility in order to circumvent the ever-changing crypto market. We are also a multi-faceted agency that can broker deals within and outside the metaverse while providing large-scale blockchain solutions across all crypto platforms.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/cc7769652fe434d8a26e2a407de877ab/c6979f5e',
            ),
            'links' => 
            array (
            ),
          ),
          259 => 
          array (
            'name' => 'The Lazyverse',
            'symbol' => 'the_lazyverse',
            'description' => 'Stake your Lazy NFT and enter the Lazyverse! Take part in epic adventures and missions to boost your faction! Acquire legendary loot along the way, and gear up your Lazy NFT to make it even rarer! $LAZY',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/1b4bb7bb01fee0dc194719ec22ec81f2/d7fd053e',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/TheLazyverse',
              'discord' => 'https://discord.gg/thelazyverse',
              'website' => 'https://www.thelazyverse.com/ ',
            ),
          ),
          260 => 
          array (
            'name' => 'BROBOTS',
            'symbol' => 'brobots',
            'description' => 'A community of Bros and Baes who share a love for NFT’s, sports, gaming, music, tech, fashion and art. Generated from 1,111 hand drawn traits, all 4,000 BroBots and 1913 BaeBots are completely unique. BebeBots coming soon. Come build an entire family',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/56af33cf10e81f936aaf802b4773ada1/16515baa',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/br0b0ts',
              'discord' => 'https://discord.gg/brobots',
              'website' => 'https://brobots.io/',
            ),
          ),
          261 => 
          array (
            'name' => 'Dapper Ducks: The Pond',
            'symbol' => 'dapper_ducks',
            'description' => '4,222 Dapper Ducks staked in order to earn $EGGZ. Ducks are important to enter and continue playing the game! Next generation NFTs are bought with burning ducks and $EGGZ. At the same time, hunters are stealing $EGGZ from your duckies. The pond is an ecosystem and the fate of the ducks is in your hands!',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/3abc66fb18641af32987844d26a0c6ce/cf79c294',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/Dapper_DucksNFT',
              'discord' => 'https://discord.gg/DapperDucks',
              'website' => 'https://thedapperducks.com/home',
            ),
          ),
          262 => 
          array (
            'name' => 'BR1: Metaverse',
            'symbol' => 'br1_metaverse',
            'description' => 'The leading gaming Metaverse, built on the Solana blockchain. Earn Solana for the time you spend playing games within the BR1 Ecosystem. ',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeib4np6pwt4xgxnc7ls3ft537wznklzplqlskg5dbxj2gqkoqoojuy.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/BR1METAVERSE',
              'discord' => 'https://discord.gg/BR1Metaverse',
              'website' => 'https://www.br1game.com/',
            ),
          ),
          263 => 
          array (
            'name' => 'Saiba Gang',
            'symbol' => 'saiba_gang',
            'description' => 'A Solana NFT cyberpunk manga project and community for people who love good vibes and rich, immersive manga.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/46254048e576bb6e0faec778a56584c3/3d6303f6',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/SaibaGang',
              'discord' => 'https://discord.gg/aRPTxj5FMA',
              'website' => 'https://www.saibagang.com/',
            ),
          ),
          264 => 
          array (
            'name' => 'SoulKombat',
            'symbol' => 'soulkombat',
            'description' => 'SoulKombat is a future staking game project on the Solana blockchain with upgradeable NFT characters. There are 4,000 SoulFighters and 1,000 Dragons who together use their $CHKRA to battle. Tribes and players will be able to compete every season to be the strongest in the AfterLife.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/7b325ba6dfa3f0420cd6da10f7ad02ac/69cf88d5',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/SoulKombat',
              'discord' => 'https://discord.gg/soulkombat',
              'website' => 'https://soulkombat.com',
            ),
          ),
          265 => 
          array (
            'name' => 'NEONEXUS',
            'symbol' => 'neonexus',
            'description' => 'A futuristic, cyberpunk city, alive in the metaverse. Own property, take part in the gameplay, and help us build. With the highest density and diversity of people, the NEONEXUS is an exciting place that never sleeps. Civil life teems within a steel forest of skyscrapers that pierce the sky. Gangs rule the narrow streets. And behind closed doors, the money flows... from somewhere.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/bd428776e1d8b71807597b8411e6706b/c1cd2a6a',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/neonexus_world',
              'discord' => 'https://discord.gg/y76VcXQrZq',
              'website' => 'https://neonexus.io/',
            ),
          ),
          266 => 
          array (
            'name' => 'Dino Kingz',
            'symbol' => 'dinokingz',
            'description' => 'Dino Kingz are a collection of 2,222 Dino’s flying around Solana Blockchain. We created Dino DAO Vault where we buy Bluechip NFTs and fraktionalise them on Frakt.Art. By Staking Dino Kingz, you can earn $Dino Token which makes you a shareholder of our DAO Vault. Baby Dinos are launched and this will be our 2nd Collection. Baby Dinos are integrated into Zion Ecosystem and you can Stake your Baby Dinos to earn $Zion Token Daily. Evolution of Dino Kingz will create 3D Voxel Dinos',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/e88a1e2c7e3035151ccf648922732c11/416e23d3',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/DinoKingzNFT',
              'discord' => 'https://discord.gg/RVA8YZ6Etk',
              'website' => 'https://dinokingz.com/',
            ),
          ),
          267 => 
          array (
            'name' => 'Solarmy',
            'symbol' => 'solarmy',
            'description' => 'Solarmy is a limited battalion of 2D & 3D NFT Soldiers —unique digital collectibles living on the Solana blockchain.',
            'assets' => 
            array (
              'bannerImage' => 'https://i.imgur.com/xGQhrln.jpg',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/TheSolarmy',
              'discord' => 'https://discord.gg/solarmy',
              'website' => 'https://solarmy.io',
            ),
          ),
          268 => 
          array (
            'name' => 'Titan Arena',
            'symbol' => 'titan_arena',
            'description' => '75% of all royalties generated go back to holders in the form of a 10 Round knockout tournament in the Titan Arena. Earn $dusa token each day by just holding your characters. Use $dusa to power up your fighters and purchase future mints. Titan Arena also generates revenue by renting out the Arena to other projects to host their own tournaments.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/f55ac396f7d8d6b375e3463e1e6818a0/8bb961f4',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/TitanArenaNFT',
              'discord' => 'https://discord.gg/titanarena',
            ),
          ),
          269 => 
          array (
            'name' => 'DarleyGo',
            'symbol' => 'darleygo',
            'description' => 'DarleyGo is the world’s first myth-based NFT horse racing game based on Solana that allows players to train, race, breed, and collect NFT horses. These horses are all unique and have their unique characteristics and abilities.',
            'assets' => 
            array (
              'bannerImage' => 'https://i.imgur.com/7XxBvcR.jpg',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/DarleyGo_io',
              'discord' => 'https://discord.gg/invite/DarleyGo',
              'website' => 'https://www.darleygo.io/',
            ),
          ),
          270 => 
          array (
            'name' => 'Voxel Monkes',
            'symbol' => 'voxel_monkes',
            'description' => 'Voxel Monkes are a curated set of handcrafted 3D pixel art NFTs. They are infused with unique themes, styles and cultural references. Some are animated and some are static, but all are unique creations. Each piece is a 1-of-1 work of art.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/a68e301b0f7df75f15f671ac32e1e9b0/88b6ca04',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/VoxelMonkes',
              'discord' => 'https://discord.gg/voxelmonkes',
              'website' => 'https://www.voxelmonkes.com/',
            ),
          ),
          271 => 
          array (
            'name' => 'Heaven Land',
            'symbol' => 'heaven_land',
            'description' => 'Heaven Land builds a virtual reality platform where users can experience, improve and monetize their assets.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/88cd331017f432acefde11855d6b2b96/885af79b',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/heavenland_io',
              'discord' => 'https://discord.gg/heavenland',
              'website' => 'https://heavenland.io',
            ),
          ),
          272 => 
          array (
            'name' => 'Cute Sneaker',
            'symbol' => 'cute_sneaker_brand',
            'description' => 'The Cutest Metaverse Sneaker Brand designed by The Community.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/2119f6be02cf2d3b72446bc880c329bf/980096d9',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/CuteSneaker',
              'discord' => 'https://discord.gg/hEivZGVGH1',
              'website' => 'https://cutesneaker.com/',
            ),
          ),
          273 => 
          array (
            'name' => 'Famous Fox Federation',
            'symbol' => 'famous_fox_federation',
            'description' => 'Occupying the Foxosphere are 7,777 of the most Famous Foxes you\'ll ever meet! Each with their own unique personalities and traits, Foxes spend their days hanging around their Dens, going on adventurous, rewarding Missions, or heading to the Market and spending their hard-earned $FOXY on a variety of exciting perks and utilities to improve their quality of life!',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/a50470c510e87f38253c814f6600a879/98293408',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/FamousFoxFed',
              'discord' => 'https://discord.gg/famousfoxes',
              'website' => 'https://famousfoxes.com',
            ),
          ),
          274 => 
          array (
            'name' => 'Rude Golems',
            'symbol' => 'rude_golems',
            'description' => 'Rude Golems or the Rude Family is bringing the finest 3D art and innovation to the Solana scene.
        Giblatön is their planet, the metaverse is their place!',
            'assets' => 
            array (
              'bannerImage' => 'https://i.imgur.com/nc1lxr7.png',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/RudeGolems',
              'discord' => 'https://discord.gg/rudegolems',
              'website' => 'https://rudegolems.com/',
            ),
          ),
          275 => 
          array (
            'name' => 'Gooney Toons',
            'symbol' => 'gooney_toons',
            'description' => '',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/d9c25b74e2a8ed2efd18660d0748152f/fd0dde53',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/GooneyToonsNFT',
              'discord' => 'https://discord.gg/gooneytoons',
              'website' => 'https://gooneytoons.studio/',
            ),
          ),
          276 => 
          array (
            'name' => 'Moduluc',
            'symbol' => 'moduluc',
            'description' => 'Building Blocks of Metaverse',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/3c01494aec7029d33c05bee6c1ed8df1/e1c8ffaa',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/Moduluc',
              'discord' => 'https://discord.gg/N92mSHkJRU',
              'website' => 'https://moduluc.com',
            ),
          ),
          277 => 
          array (
            'name' => 'Bitmon World',
            'symbol' => 'bitmon_world',
            'description' => 'Play, Breed, Trade and Fight with decentralized monsters. 2 years in the making.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/6c7f28ad86d2f71b1d90ef2a85377cfe/3f3137a8',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/BitmonWorld',
              'discord' => 'https://discord.gg/bitmon',
              'website' => 'https://bitmon.io',
            ),
          ),
          278 => 
          array (
            'name' => 'Abstract Labs',
            'symbol' => 'abstract_labs',
            'description' => 'Abstract labs is an art incubator in Solana. We curate artists from all around the world, and provide them with a platform, tools and a community required to reach a wider audience, and build their own brands.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/ef5cd41de76c379a50ed67a1f905ed3c/1837a519',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/AbstractLabs',
              'discord' => 'https://discord.gg/RzcSqNnVz4',
              'website' => 'https://abstractlabs.art/',
            ),
          ),
          279 => 
          array (
            'name' => 'Gamerplex',
            'symbol' => 'gamerplex',
            'description' => 'Gamerplex > Scaling the open metaverse through multiple games, standards, cross-game NFT’s and the $EXA token.
        ',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/33dfa6ed6807b11124e79c37b7019cd8/129a6964',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/gamerplex_com',
              'discord' => 'https://discord.gg/gamerplex',
              'website' => 'https://gamerplex.com/',
            ),
          ),
          280 => 
          array (
            'name' => 'SoldierXSolvivor',
            'symbol' => 'soldier_x_solvivor',
            'description' => 'In Solaris, a great war is bound to happen. Whether you\'re able to infiltrate Solaris as a Soldier, their fate is yours to decide. SOLDIER is Part I of SoldierXSolvivor NFT series, community driven manga powered by Solana. ',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/70b9db27d45bcfb46a7ca74e17a9a656/f2725551',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/SoldierSolvivor',
              'discord' => 'https://discord.gg/soldierxsolvivor',
              'website' => 'https://www.soldierxsolvivor.com/',
            ),
          ),
          281 => 
          array (
            'name' => 'Bat City Underground',
            'symbol' => 'bat_city_underground',
            'description' => 'Bat City Underground will create the first decentralized TV Show in history, created and owned by holders.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/c7a907566b08e94fa128f1ec3e8f1d9e/6bb6604b',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/NewBatCity',
              'discord' => 'https://discord.gg/newbatcity',
              'website' => 'https://newbat.city/',
            ),
          ),
          282 => 
          array (
            'name' => 'Lux VR Metaverse',
            'symbol' => 'lux',
            'description' => 'Virtual reality experience in the metaverse bringing together the best-in-class of NFTs, entertainment, gaming, residential, e-commerce, and more...',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/372b345c570b63c3ea0c01fa6528b046/73a776be',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/weareLUX_space',
              'discord' => 'https://discord.gg/p6HRnSYEd8',
              'website' => 'https://wearelux.space/',
            ),
          ),
          283 => 
          array (
            'name' => 'Akumaverse',
            'symbol' => 'akumaverse',
            'description' => 'Akumaverse is a collection of Akumas that have manifested. The Elemental Akumas are summonable only via the Genesis collection Akuma no Neko with $Hono. Akumaverse grants owners access to staking, breeding, tokens, and more.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/2fa7ff5d03c6239ebc7c85b8b2b73c18/90c796f1',
            ),
            'links' => 
            array (
            ),
          ),
          284 => 
          array (
            'name' => 'METAHEAVEN',
            'symbol' => 'metaheaven',
            'description' => 'The MetaHeaven is a 3D Metaverse where NFT holders alone or as a community can explore, socialize, own land, build and shape their own residence & more. A peaceful, wondrous play to earn space on Solana; combining the best of gaming and NFT worlds, developed with Unreal Engine.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/a482fcb27a92d89bfc03f55d08921765/53b850ff',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/metaheaven_',
              'discord' => 'https://discord.gg/metaheaven',
              'website' => 'https://metaheaven.land/',
            ),
          ),
          285 => 
          array (
            'name' => 'Joylina’s Cantina',
            'symbol' => 'joylinas_cantina',
            'description' => 'Joylina’s Cantina is a creative art project with a mission to elevate artists and build a community-driven universe full of extraordinary characters.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/781c563c92f74638373a3ad4d0ac3145/8f8f60c9',
            ),
            'links' => 
            array (
            ),
          ),
          286 => 
          array (
            'name' => 'BAPE Social Club',
            'symbol' => 'bape_social_club',
            'description' => 'The most passionate, exclusive and wonderful community of degenerates on Solana.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/2fa82a8ccd61d1440ded4d5621093218/fd116705',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/BAPESocialClub',
              'discord' => 'https://discord.gg/bapesocialclub',
              'website' => 'https://www.boredapesocial.club/',
            ),
          ),
          287 => 
          array (
            'name' => 'Xin Dragons',
            'symbol' => 'xin_dragons',
            'description' => 'Xin Dragons is a web3 tech company providing a full suite of utilities that any NFT project needs. We believe in a software first approach with a premium bespoke service.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/e9006ac2da72ec2d123f2ad4a940ede8/1ef58d64',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/XinDragons',
              'discord' => 'https://discord.gg/uh3WHVdn',
              'website' => 'https://xindragons.io',
            ),
          ),
          288 => 
          array (
            'name' => 'Jungle Cats',
            'symbol' => 'jungle_cats',
            'description' => 'A strong and diverse community striving to build in Web3 and the metaverse whilst providing vast opportunities to our members.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/56750fba716c219311d144eeab5376f6/e6ae006a',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/JungleCatsIO',
              'discord' => 'https://discord.gg/junglecats',
              'website' => 'https://www.junglecats.io/',
            ),
          ),
          289 => 
          array (
            'name' => 'Zillaz',
            'symbol' => 'zillaz',
            'description' => 'Zillaz are an exclusive Solana based NFT collection of 2424 Zillaz. The 4 species of Zillaz  (The GZillaz, The CatZillaz, The DogeZillaz & The MonkeZillaz) wreak havoc on the Zillaz Kingdom and the Meteverse alike. Zillaz are airdropped their native utility token known as RAD which is used throughout the Zillaz Metaverse. Breeding and the next stage of the Zillaz evolution has already begun.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/1fedf4f8b1f590f8700df757974fbed4/4cc4c4ce',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/ZillazNFT',
              'discord' => 'https://discord.gg/zillaz',
              'website' => 'https://zillaz.net/',
            ),
          ),
          290 => 
          array (
            'name' => 'Scopio',
            'symbol' => 'scopio',
            'description' => 'Scopio stands for “Scope It Out,” a digital space with the primary goal of elevating human stories told by people from underrepresented communities and regions. The vision of Scopio is to distribute the world’s images so they can make their place in history.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/683c76ff3d91ade59eb6794a2792f482/7e0e0f04',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/scopioimages ',
              'discord' => 'https://discord.gg/GJHjqVyepd',
              'website' => 'https://www.scop.io',
            ),
          ),
          291 => 
          array (
            'name' => 'Boopieverse',
            'symbol' => 'boopieverse',
            'description' => 'The collections of the Boopieverse.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/c7682aeb5c98fa7fafe254c136f63bbb/e203f234',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/boopieverse',
              'discord' => 'https://discord.gg/boopie',
              'website' => 'boopieverse.com',
            ),
          ),
          292 => 
          array (
            'name' => 'SOL Flowers',
            'symbol' => 'sol_flowers',
            'description' => 'Sol Flowers, a collection focused on creating original art from generative art.
        All OG & 3D Flowers will be part of our custom upgrade and deflationary program. 
        By exchanging 3D Flowers along with $FLWR the SOL Flowers art team will create a brand-new custom image using the traits from your trade-ins plus new special ones only available through this model. While 3Ds are deflationary our Genesis Og\'s and Underworlds benefit from increased staking rewards. Our art team is led by Cory Shaw, a 2-time Oscar nominee in animation and 1 time Emmy Award winner.
        ',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/cfc116dd5407599056ba22f7ec441841/2454d115',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/solflowers_io',
              'discord' => 'https://discord.gg/stat797',
              'website' => 'https://www.solflowers.io/',
            ),
          ),
          293 => 
          array (
            'name' => 'SOL NFL PLAYERS',
            'symbol' => 'sol_nfl_players',
            'description' => 'AI Gen Pixel Art - 6400 cute and collectible SOL NFL PLAYERS! 🏈',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/db73e3285e01169e184deecaebc960f7/dc6678d5',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/SOL_NFL_PLAYER',
              'discord' => 'https://discord.gg/QCQuacmF3G',
              'website' => 'https://www.solnfl.com/',
            ),
          ),
          294 => 
          array (
            'name' => 'ANYBODIES',
            'symbol' => 'anybodies',
            'description' => 'Anybodies is the leading web3 apparel brand that collaborates with the top communities, celebrities & brands to harness their IP power in the metaverse by creating unique & immersive shopping, socializing and product experiences.
        
        We integrate NFTs, AR technology, game design and manufacturing to create one-of-a-kind products that are available in both physical & digital form. A true web3 product experience. Notable partnerships include Nike, Tay Keith & DeGods.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/867eb7ab7489227afb77e45de9853ac9/128a3824',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/https://twitter.com/AnybodiesNFT',
              'discord' => 'https://discord.gg/https://discord.gg/anybodies',
              'website' => 'https://anybodies.io',
            ),
          ),
          295 => 
          array (
            'name' => 'The Fracture',
            'symbol' => 'the_fracture',
            'description' => 'The creative collections that surround the The Fracture: SOLgods brand',
            'assets' => 
            array (
              'bannerImage' => 'https://i.imgur.com/0VWdxeO.png',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/TheFracture_',
              'discord' => 'https://discord.gg/thefracture',
              'website' => 'https://www.thefracture.io/',
            ),
          ),
          296 => 
          array (
            'name' => 'Grim Syndicate',
            'symbol' => 'grim_syndicate',
            'description' => 'The Grim Syndicate is an NFT-powered global storytelling brand with creative experiences based in inclusive community engagement, gaming, and traditional media. Each piece in this collection—the Grim Syndicate, the Lurkers of the Abyss, and Lordrym\'s Workshop—makes up a piece of the Grim universe.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/42c98f68721182fcacc7f1452fcff0b5/7b33f70a',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/Grim__Syndicate',
              'discord' => 'https://discord.gg/xeHPSUhUv7',
              'website' => 'https://grimsyndicate.com/',
            ),
          ),
          297 => 
          array (
            'name' => 'Jung Woonyoung',
            'symbol' => 'jung_woonyoung',
            'description' => 'NFTs by Animation Art Director, Jung Woonyoung.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/e22c12c1a9be8f0d511ec0bdead20fae/9e8226cd',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/thecryptocoven',
              'discord' => 'https://discord.gg/AazETR4a7Q',
              'website' => 'https://www.instagram.com/woonyoungjung/',
            ),
          ),
          298 => 
          array (
            'name' => 'Mindfolk',
            'symbol' => 'mindfolk',
            'description' => 'There’s magic in their pipes, and more ideas in their minds! Some say it’s from the wood found in the forests of the lush Peninsula, upon which their Schooners wrecked. Having left their over-populated lands in search of greener shores, the 777 hatted individuals known as the Mindfolk have set-out to introduce new architectural structures within their environment.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/74346e811525b89e9fc51f505e7e61da/7b09c1f3',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/mindfolkART',
              'discord' => 'https://discord.gg/zsMxCZxYKw',
              'website' => 'https://www.mindfolk.art/',
            ),
          ),
          299 => 
          array (
            'name' => 'Turnt Up Tikis',
            'symbol' => 'turnt_up_tikis',
            'description' => '3,600 Turnt up Tikis are in the wild!',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/ada311554c32f71689944161af3fb91e/2913c5c4',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/turntuptikis',
              'discord' => 'https://discord.gg/HFGRjfr4Fr',
              'website' => 'https://turntuptikis.com/',
            ),
          ),
          300 => 
          array (
            'name' => 'Bounty Hunter Space Guild',
            'symbol' => 'bounty_hunter_space_guild',
            'description' => '5,555 unique Bounty Hunters on #Solana',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/e82f175dab63be97a4e0259004cf0d66/d0c65ad8',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/BountyHunterNFT',
              'discord' => 'https://discord.gg/q9NBpw3xw8',
              'website' => 'https://bountyhunterspaceguild.com',
            ),
          ),
          301 => 
          array (
            'name' => 'Soul Dogs',
            'symbol' => 'soul_dogs',
            'description' => 'A retro-inspired 3D Metaverse where Soul Dogs live in digital Dog Houses and generate income by earning $BONES',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeibm47pfrmo2ve6kwvqhlh6gvubh6q5g27akdpm5wzft5j325mfotq.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/SoulDogsNFT',
              'discord' => 'https://discord.gg/souldogs',
              'website' => 'https://souldogs.city',
            ),
          ),
          302 => 
          array (
            'name' => 'Culture of Women',
            'symbol' => 'culture_of_women',
            'description' => 'An NFT brand, celebrating Culure of Women from around the 🌍 ',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/1cfa8f4553c52c60ecb1c40f780a1987/4f553810',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/CultureOfWomen',
              'discord' => 'https://discord.gg/cultureofwomen',
              'website' => 'https://cultureofwomen.com/',
            ),
          ),
          303 => 
          array (
            'name' => 'Prickly Pete\'s Platoon',
            'symbol' => 'prickly_petes_platoon',
            'description' => 'Art, Utility-based NFT Project, focused on reviving planet Earth. 
        Earn $PETE, Mint NFT drops, Stake NFTs, Upgrade NFTs.
        Platoon Bots Mint - 8 Feb on Magic Eden',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/94be3b4893e4cb5ed0ce226fa10ab874/4ac542e7',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/Pricklyplatoons',
              'telegram' => 'https://t.me/+EMt37EdmNGdmOWQ1',
              'discord' => 'https://discord.gg/UyWa9zZc',
              'website' => 'https://www.pricklypetesplatoon.army/',
            ),
          ),
          304 => 
          array (
            'name' => 'Solantasy',
            'symbol' => 'solantasy',
            'description' => 'Solantasy - a 2D P&E RPG game • 3/3 Collections released & sold out. ',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/9b32d357236892dc48da2c09ccdb0979/ceeb710c',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/solantasy',
              'discord' => 'https://discord.gg/FA5yjXFPE4',
              'website' => 'https://solantasy.com/',
            ),
          ),
          305 => 
          array (
            'name' => 'WastelanderZ',
            'symbol' => 'wastelanderz',
            'description' => 'WastelanderZ is a deflationary NFT collection on Solana. Based on a post-apocalyptic universe, discover an ecosystem where the story impacts its holders.',
            'assets' => 
            array (
              'bannerImage' => 'https://dl.airtable.com/.attachmentThumbnails/c8a7bfe1e7333ea0ba55b8d95bd4accd/f216d190',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/WasteLanderzNFT',
              'discord' => 'https://discord.gg/wastelanderz',
              'website' => 'https://wastelanderz.com/',
            ),
          ),
          306 => 
          array (
            'name' => 'Panzerdogs',
            'symbol' => 'panzerdogs',
            'description' => 'Panzerdogs is an online PVP tank brawler with play-to-earn mechanics. Use your avatar to craft and build custom tanks and start battling against each other in a variety of exciting game modes.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreigwklmbfpxowof22spy4ppmdlj66clcxbjobx2bafnyvzyxitfcs4.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/panzerdogs',
              'discord' => 'https://discord.gg/panzerdogs',
              'website' => 'https://panzerdogs.io',
            ),
          ),
          307 => 
          array (
            'name' => 'Boryoku Dragonz',
            'symbol' => 'boryoku_dragonz',
            'description' => 'Bōryoku Dragonz are a exclusive collection of 1,111 Dragon NFTs on the Solana blockchain featuring top pixel art, daily utility token airdrops, and a breeding game with token burning mechanics. The Dragonz have a multi-chain community of Genesis, Baby, and Egg holders. There is something for everyone in Bōryoku Village…
        
        THE ERA OF THE DRAGONZ HAS ONLY JUST BEGUN',
            'assets' => 
            array (
              'bannerImage' => 'https://i.imgur.com/hXVjsfZ.jpg',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/BoryokuDragonz',
              'discord' => 'https://discord.gg/jSUWCYm3rF',
              'website' => 'https://boryokudragonz.io/',
            ),
          ),
          308 => 
          array (
            'name' => 'Mini Royale',
            'symbol' => 'miniroyale',
            'description' => 'Nations is a browser-based first-person-shooter set on top of a land strategy game. Players can earn mintable items through Battle Pass and Quests, join or create Clans to participate in Clan Wars, fuse weapons and characters for ultra rare skins, and more. Play now at miniroyale.io',
            'assets' => 
            array (
              'bannerImage' => 'https://bafkreicpxdamg2tc5pjyrgnx2hooqlqqp4fqcnn75nq7ue7tutv3lo5ajm.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/mininations',
              'website' => 'https://miniroyale.io/',
            ),
          ),
          309 => 
          array (
            'name' => 'Genopets',
            'symbol' => 'genopets',
            'description' => 'Genopets is a Free-to-Play, Move-to-Earn NFT mobile game that makes it fun and rewarding to live an active lifestyle. A Genopet is your digital pet whose evolution and growth is inextricably linked to your own. The steps you take every day power your journey through the Genoverse as you explore, battle, and evolve —earning crypto while you play.',
            'assets' => 
            array (
              'bannerImage' => 'https://bafybeicwfmeurgtg4taahrqe3hi3p33lbiuk46vtovv2pe2ljvbc3lijiq.ipfs.nftstorage.link/',
            ),
            'links' => 
            array (
              'twitter' => 'https://twitter.com/genopets',
              'discord' => 'https://discord.gg/genopets',
              'website' => 'https://t.co/h1tyYaAGQk',
            ),
          ),
      );
  
      foreach ($description as $value) {
          $Collection = Collection::updateOrCreate(['name' => $value['symbol']], $value);
      }
    }
}
