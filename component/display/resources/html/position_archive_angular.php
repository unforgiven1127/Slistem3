<!doctype html>
<html ng-app>
  <head>
    <title>Angular Position List</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
  </head>
  <body>

  	<ul ng-init="personeller=[
{ isim: 'Yezden', soyisim: 'Erdurak', cinsiyet: 'Erkek', maas: '3569' },
{ isim: 'Elfiye', soyisim: 'Şencin', cinsiyet: 'Erkek', maas: '4143' },
{ isim: 'Teberhun',soyisim: 'Karadağ sazak',cinsiyet: 'Kız', maas: '2337' },
{ isim: 'Çağar', soyisim: 'Alkan', cinsiyet: 'Kız', maas: '1883' },
{ isim: 'Mükafi', soyisim: 'Düşer', cinsiyet: 'Kız', maas: '3869' },
{ isim: 'Süreha',soyisim: 'Karakaya',cinsiyet: 'Erkek',maas: '1796' }
]">
	    <li ng-repeat="position in personeller | filter:query">
	       <p>{{position.isim}}</p>
	    </li>
	</ul>

  </body>
</html>