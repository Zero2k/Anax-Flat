Speed and Usability
===============================

<h4>Inledning</h4>

Jag har valt att analysera samma sidor som jag gjorde i förra analysen, så Avanza.se, Reddit.com, Twitch.com och Netflix.com.

När jag gör analysen så kommer jag titta på följande värden på Google Pagespeed och i DevTools:

<table class="table1 full-width">
  <tbody>
    <thead>
        <tr>
            <th>Tabelguide</th>
        </tr>
    </thead>
    <tr>
        <td>PSMS</td>
        <td>PageSpeed Insights - Mobile Speed</td>
    </tr>
    <tr>
        <td>PSD</td>
        <td>PageSpeed Insights - Desktop</td>
    </tr>
    <tr>
        <td>DTPS</td>
        <td>DevTools Page Speed</td>
    </tr>
    <tr>
        <td>DTPTS</td>
        <td>DevTools Page Total Size</td>
    </tr>
    <tr>
        <td>DTR</td>
        <td>DevTools Resources</td>
    </tr>
  </tbody>
</table>

I DevTools så har jag även gjort så att Cache är avstängd och den laddar med en hastighet motsvarande WiFi (2ms, 30mb/s, 15mb/s).

<hr>

<h3>Avanza.se</h3>
<img style="width:320px;" src="img/Avanza.jpeg" alt="Avanza.se">
<table class="table1">
  <thead>
    <tr>
      <th></th>
      <th>PSMS</th>
      <th>PSD</th>
      <th>DTPS</th>
      <th>DTPTS</th>
      <th>DTR</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><a href="https://www.avanza.se/start">Startsida</a></td>
      <td>70/100</td>
      <td>87/100</td>
      <td>1.37s</td>
      <td>1022 KB</td>
      <td>11</td>
    </tr>
    <tr>
      <td><a href="http://blogg.avanza.se/hemberg/">Blog</a></td>
      <td>65/100</td>
      <td>55/100</td>
      <td>1.73s</td>
      <td>1.1 MB</td>
      <td>12</td>
    </tr>
    <tr>
      <td><a href="https://www.avanza.se/marknadsoversikt.html">Börsen Idag</a></td>
      <td>63/100</td>
      <td>74/100</td>
      <td>2.70s (1.68s)</td>
      <td>1.0 MB</td>
      <td>14</td>
    </tr>
  </tbody>
</table>

På Avanza.se så klagar Google PageSpeed Insights att de har "render-blocking JavaScript and CSS" och det som Google vill att Avanza ska åtgärda är 2 CSS och Google Fonts. Problemet med CSS-filerna är att man måste vänta på dem innan "above-the-fold"-innehållet kan laddas. Så här handlar det om hur innehållet laddas in på sidan, men samtidigt om man tittar på laddtiderna så är det inget jag hade fokuserat speciellt mycket på.

Visserligen så har sidan Börsen Idag något högre laddtid, men jag kom på att det berode på att jag var inloggad och då skickas kursdata i realtid vilket förmodligen ökar laddtiden. Så efter att jag har loggat ut och gör om testet så får jag en laddtid på 1.68s.

Något annat som också Google PageSpeed reagerar på är att de borde öka cachens "expiry date" på externa resurser. Till exempel så använder Avanza https://connect.facebook.net/en_US/fbevents.js och den har en cache på 20min.

( Tiden inom Parentes är Ej Inloggad )

<hr>

<h3>Reddit.com</h3>
<img style="width:320px;" src="img/Reddit.jpeg" alt="Reddit.com">
<table class="table1">
  <thead>
    <tr>
      <th></th>
      <th>PSMS</th>
      <th>PSD</th>
      <th>DTPS</th>
      <th>DTPTS</th>
      <th>DTR</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><a href="https://www.reddit.com/">Startsida</a></td>
      <td>56/100</td>
      <td>66/100</td>
      <td>3.57s</td>
      <td>585 KB</td>
      <td>10</td>
    </tr>
    <tr>
      <td><a href="https://redditblog.com/">Blog</a></td>
      <td>67/100</td>
      <td>86/100</td>
      <td>17.69s</td>
      <td>21.4 MB</td>
      <td>11</td>
    </tr>
    <tr>
      <td><a href="https://about.reddit.com/careers/">Jobb</a></td>
      <td>21/100</td>
      <td>24/100</td>
      <td>3.63s</td>
      <td>3.3 MB</td>
      <td>4</td>
    </tr>
  </tbody>
</table>

På Reddit.com så påpekar Google PageSpeed Insights att de har "render-blocking JavaScript and CSS" men det rör sig om en JavaScript-fil och tre CSS-filer. Tyvärr kan jag inte se hur lång tid dessa tar att ladda, men det är nog något som jag personligen hade försökt att fixa eftersom en laddtid på 3.57s känns rätt högt i förhållande till storleken på sidan (585 KB).

Precis som på Twitch så tycker Google att Reddit borde utnytja "browser caching", men här tycker jag att Reddit har rätt bra värden och det enda som jag reagerar på är följande fil https://www.reddit.com/static/pixel.png som har en cach på 60 min. Dock är det inget som kan påverka laddtiden då det är en bild på 1x1px...

Sen angående deras Blog som har en väldigt hög laddtid så tror jag det beror på att där är en del bilder. Men samtidigt så är det inget som Google PageSpeed reagerar på så det är svårt att säga exakt vad som orsakar detta, speciellt då sidan för övrigt får bra betyg.
<hr>

<h3>Twitch.com</h3>
<img style="width:320px;" src="img/Twitch.jpeg" alt="Twitch.com">
<table class="table1">
  <thead>
    <tr>
      <th></th>
      <th>PSMS</th>
      <th>PSD</th>
      <th>DTPS</th>
      <th>DTPTS</th>
      <th>DTR</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><a href="https://www.twitch.tv/">Startsida</a></td>
      <td>84/100</td>
      <td>54/100</td>
      <td>8.63s</td>
      <td>5.1 MB</td>
      <td>26</td>
    </tr>
    <tr>
      <td><a href="https://www.twitch.tv/directory">All Games</a></td>
      <td>84/100</td>
      <td>51/100</td>
      <td>7.77s</td>
      <td>4.5 MB</td>
      <td>24</td>
    </tr>
    <tr>
      <td><a href="https://blog.twitch.tv/">Blog</a></td>
      <td>55/100</td>
      <td>77/100</td>
      <td>7.88s</td>
      <td>1.1 MB</td>
      <td>5</td>
    </tr>
  </tbody>
</table>

På Twitch tycker Google PageSpeed Insights att bilderna behövs optimeras, dels genom att ändra storleken på bilden men även genom komprimering. Men kollar man igenom hela listan på bilder som Google tycker att man borde så rör det sig om 378 KB som man kan spara. Så personligen tycker jag ändå att de har lyckats rätt bra och även om man hade lyckats få bort de 378 KB så är det ingen som hade märkt någon skillnad...

Något som de också borde kolla på är deras "browser caching" och då speciellt bilderna som de skulle kunna sätta en högre "expiry date". Men samtidigt är det viktigt att komma ihåg att på Twitch är det mycket som händer i realtid och då är det inte helt lätt att cacha allt, men som sagt bilder behöver sällan ha en "expiry date" på 60 sec.

<hr>

<h3>Netflix.com</h3>
<img style="width:320px;" src="img/Netflix.jpeg" alt="Netflix.com">
<table class="table1">
  <thead>
    <tr>
      <th></th>
      <th>PSMS</th>
      <th>PSD</th>
      <th>DTPS</th>
      <th>DTPTS</th>
      <th>DTR</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><a href="https://www.netflix.com/se/">Startsida</a></td>
      <td>64/100</td>
      <td>76/100</td>
      <td>2.91s</td>
      <td>1.3 MB</td>
      <td>6</td>
    </tr>
    <tr>
      <td><a href="https://www.netflix.com/getstarted?action=startAction&locale=sv-SE">Bli Kund</a></td>
      <td>71/100</td>
      <td>89/100</td>
      <td>1.04s</td>
      <td>374 KB</td>
      <td>3</td>
    </tr>
    <tr>
      <td><a href="https://media.netflix.com/en/">Media Center</a></td>
      <td>19/100</td>
      <td>47/100</td>
      <td>7.40s</td>
      <td>6.0 MB</td>
      <td>4</td>
    </tr>
  </tbody>
</table>

Enligt Google PageSpeed Insights så finns det några saker som Netflix skulle behöva fixa. Det första är att optimera sina bilder. Till exempel så är en av de första bilderna 1.7 MB, medans de andra ligger runt 105 KB så frågan är om de har glömt att optimera just den bilden. Men det är inte bara storleken på själva filen som de borde fixa. Till exempel så visas bilderna i storleken 338x540px men den verkliga storleken är 1107x1661.

Detta är väl kanske inte helt ovanligt att man har en större bild och sen med hjälp av CSS förminskar den i och med alla högupplösta mobiltelefoner och retina skärmar, men i det här fallet så är bilden 3 gånger så stor och rekommendationen när man jobbar med retina är att bilden ska vara dubbelt så stor.

Något annat som också Netflix borde göra är att komprimera sina CSS-filer och åtgärda i vilken ordning dessa laddas in på sidan.

<h3>Rangordning</h3>

Först kommer Avanza.se, deras sida laddar snabbt och då är där mycket data som skickas i realtid. De har något låga värden från PageSpeed Insights vilket jag kan förstå då hemsidan inte är "mobilanpassad" men jag tycker ändå den fungerar bra Ipad till exempel. Hur anpassad den är just för mobilen kan jag inte svara på då jag använder deras app för detta ändamål.

Trots sina förhållandevis höga laddtider så anser jag att Twitch.com är näst bäst då sidan fungerar bra på läsplator även då den mobilanpassade versionen inte är speciellt bra. Men som jag skrev ovan så spelar detta inte så stor roll då det viktiga är att man får igång streamen, för när väl den är igång så interagera man inte speciellt mycket med sidan förutom chatten som är i realtid.

När det gäller Netflix så laddar sidorna förhållandevis snabbt. Det som är bra är att deras "Bli Kund"-sida laddar väldigt snabbt och jag kan tänka mig att det är deras viktigaste sida. Sen är sidan mobilanpassad vilket är positivt.

På fjärde plats kommer Reddit.com då deras mätvärden är rätt låga. När det gäller startsidan för Reddit så laddar den förhållandevis snabbt med tanke på storleken och innehåll som ska laddas, men problemet är att den är inte mobilanpassad vilket gör den svårnavigerad på surfplattor. Visserligen har Reddit en mobilanpassad version och en app, men dessa är inte dem bästa då man måste scrolla väldigt mycket när man läser inlägg / trådar och man har inte alls samma överblick som man har på en dator eftersom allt är väldigt ihoptryckt.

<h3>Sammanfattning</h3>
Det som är återkommande på alla sidorna är "render-blocking JavaScript and CSS" och "browser caching" och när man undersöker mer nogrant vad dessa innebär för de olika sidorna så kan jag snabbt konstatera att alla sidorna använder någon typ av cache lösning, men där var vissa resuser som kanske hade lite kort tid som de var cachade. Till exempel så hade Twitch en del bilder som inte cachades speciellt länge och som jag skrev ovan så tycker jag att bilder är en sådan resurs som man kan ha en länge "expiery date" på.

När det gäller den absolut laddningstid som jag själv uppfattar som snabb eller långsam webbplats så tycker jag att en hemsida som har en laddtid på omkring 1 - 2sec är snabb. Och gränsen för när jag börjar tycka det går långsamt är omkring 8 sec. Men samtidigt så är det viktigt att tänka på att storleken på sidan spelar in i laddtiden och vad det är för innehåll som laddas.

Ta till exempel Twitch, där är något hög laddtid men för mig spelar det ingen större roll om det tar 3 eller 8 sec. Det viktiga här är att streamen laddar så man kan börja titta. Men om det däremot hade varit en e-handelssida som jag sitter och kollar igenom och varje sida tar 8 sec att ladda då kommer jag inte bli långvarig på den sidan.
