use imobiliariadb;

INSERT INTO ilha (nome,latitude,longitude) VALUES

('São Miguel',37.8072953,-25.7751706),
('Santa Maria',36.9727592,-25.1693536),
('Terçeira',38.721263,-27.350598),
('Graciosa',39.0529389,-28.0801136),
('São Jorge',38.6451911,-28.1752068),
('Pico',38.4719363,-28.4251688),
('Faial',38.5797324,-28.7865616),
('Flores',39.4481118,-31.2667217),
('Corvo',39.6981697,-31.1405764);


INSERT INTO concelho (id_ilha,nome,latitude,longitude) VALUES

/*Concelhos da ilha de São Miguel*/

(1,'Ponta Delgada',37.7449941,-25.6959568),
(1,'Ribeira Grande',37.818664,-25.5414106),
(1,'Lagoa',37.7493042,-25.5932738),
(1,'Vila Franca do Campo',37.7205584,-25.4447437),
(1,'Nordeste',37.8321064,-25.1550008),
(1,'Povoação',37.7486685,-25.2478451),

/*Concelhos da ilha de Santa Maria*/
(2,'Vila do Porto',36.966217,-25.1904626),

/*Concelhos da ilha da Terçeira*/
(3,'Angra do Heroísmo',38.6595096,-27.24766),
(3,'Praia da Vitória',38.7329487,-27.0816819),

/*Concelhos da Graciosa*/
(4,'Santa da cruz da graciosa',39.0881588,-28.0337622),

/*Concelhos da Ilha de São Jorge*/
(5,'Calheta de São Jorge',38.6026768,-28.022561),
(5,'Velas',38.684077,-28.2219619),

/*Concelhos da Ilha do Pico */
(6,'Lajes do Pico',38.3956911,-28.2450343),
(6,'Madalena',38.5321849,-28.5380603),
(6,'São Roque do Pico',38.5166417,-28.3182478),

/*Concelhos da Ilha do Faial */
(7,'Horta',38.5347113,-28.6543395),


/*Conselhos da Ilha das Flores*/
(8,'Lajes das Flores',39.3803706,-31.1864198),
(8,'Santa Cruz das Flores',39.4557284,-31.1418414),

/*Conselhos da Ilha do Corvo*/
(9,'Vila do Corvo',36.966217,-25.1904626);

INSERT INTO freguesia (id_concelho,nome,latitude,longitude) VALUES

/*Freguesias do concelho de Ponta Delgada da ilha de São Miguel*/
(1,'Ajuda da Bretanha',37.8980602,-25.7588557),
(1,'Arrifes',37.7623793,-25.7330287),
(1,'Candelária',37.8269871,-25.8407667),	
(1,'Vila das Capelas',37.8352561,-25.7044377),
(1,'Covoada',37.7854951,-25.7505647),
(1,'Fajã de Baixo',37.7590509,-25.6735364),
(1,'Fajã de Cima',37.768771,-25.6790938),
(1,'Fenais da Luz',37.8265054,-25.6512415),
(1,'Feteiras',37.8030178,-25.8093205),
(1,'Ginetes',37.8501355,-25.8554152),
(1,'Livramento',37.7648381,-25.6211347),
(1,'Mosteiros',37.8917364,-25.8317652),
(1,'Pilar da Bretanha',37.8981217,-25.7638837),
(1,'Relva',37.7532343,-25.7363831),
(1,'Remédios',37.8862511,-25.7442928),
(1,'Santa Bárbara',37.7986944,-25.551882),
(1,'Santa Clara',37.7362798,-25.6946256),
(1,'Santo António',37.8572513,-25.7208828),
(1,'São José',37.7398596,-25.6808437),
(1,'São Pedro',37.7452804,-25.6571215),
(1,'São Roque',37.755484,-25.6765199),
(1,'São Sebastião',37.7400917,-25.6704464),
(1,'São Vicente Ferreira',37.8213642,-25.704156),
(1,'Sete Cidades',37.8592674,-25.8126787),

/*Freguesias do concelho da Ribeira Grande da ilha de São Miguel*/
(2,'Calhetas',37.8212934,-25.618229),
(2,'Conceição',37.8186301,-25.5414105),
(2,'Fenais da Ajuda',37.8510855,-25.3340222),
(2,'Lomba da Maia',37.8308683,-25.3713373),
(2,'Lomba de São Pedro',37.8499661,-25.3188071),
(2,'Maia',37.8315475,-25.400777),
(2,'Pico da Pedra',37.8027296,-25.6299236),
(2,'Porto Formoso',37.8225648,-25.4355813),
(2,'Vila do Rabo de Peixe',37.8069509,-25.6166423),
(2,'Ribeira Seca',37.8078072,-25.5591777),
(2,'Ribeirinha',37.8269534,-25.5138377),
(2,'Santa Bárbara',37.7986944,-25.551882),
(2,'São Brás',37.8191069,-25.4204965),

/*Freguesias do concelho da Lagoa da ilha de São Miguel*/
(3,'Vila de Água de Pau',37.7212294,-25.5151033),
(3,'Cabouco',37.7627924,-25.5740476),
(3,'Rosário',37.7451662,-25.5779905),
(3,'Ribeira Chã',37.7213483,-25.4925084),
(3,'Santa Cruz',37.7438958,-25.5688685),

/*Freguesias do concelho da Vila Franco do Campo da ilha de São Miguel*/
(4,'Água De Alto',37.7204104,-25.4667046),
(4,'Ponta Garça',37.720881,-25.3753818),
(4,'Ribeira das Taínhas',37.7180726,-25.4107762),
(4,'Ribeira Seca',37.7211526,-25.4279423),
(4,'São Pedro',37.7205917,-25.4447437),
(4,'São Miguel',37.7205584,-25.4447437),

/*Freguesias do concelho do Nordeste da ilha de São Miguel*/
(5,'Achada',37.8532879,-25.2745629),
(5,'Achadinha',37.8497468,-25.2920079),
(5,'Lomba da Fazenda',37.8447311,-25.1752568),
(5,'Nordeste',37.833333,-25.146389),
(5,'Salga',37.8458159,-25.3086376),
(5,'Santo António de Nordestinho',37.852222,-25.2125),
(5,'São Pedro Nordestinho',37.8503489,-25.2011348),

/*Freguesias do concelho da Povoação da ilha de São Miguel*/
(6,'Água Retorta',37.7623181,-25.1640451),
(6,'Faial da Terra',37.7451316,-25.2070142),
(6,'Furnas',37.7736483,-25.3190233),
(6,'Remédios',37.8862598,-25.7398939),
(6,'Povoação',37.7486685,-25.2478451),
(6,'Ribeira Quente',37.7334829,-25.3069961),

/*Freguesias do concelho da Vila do Porto da ilha de Santa Maria*/
(7,'Almagreira',36.9651343,-25.1129652),
(7,'Santa Bárbara',36.9824829,-25.0788689),
(7,'Santo Espírito',36.958772,-25.0629904),
(7,'São Pedro',36.9796871,-25.1351311),
(7,'Vila do Porto',36.966217,-25.1904626),



/*Freguesias do concelho da Angra do Heroísmo da ilha de Terceira*/
(8,'Altares',38.7913641,-27.303772),
(8,'Cinco Ribeiras',38.6875387,-27.317222),
(8,'Doze Ribeiras',38.7155047,-27.3680243),
(8,'Feteira',38.6541354,-27.1584842),
(8,'Conceição',38.6562416,-27.2127142),
(8,'Porto Judeu',38.6491531,-27.1273967),
(8,'Posto Santo',38.678682,-27.2400683),
(8,'Raminho',38.7884205,-27.3337483),
(8,'Ribeirinha',38.6617376,-27.1898103),
(8,'Santa Bárbara',38.6962764,-27.3460722),
(8,'Santa Luzia',38.6606963,-27.2294146),
(8,'São Mateus da Calheta',38.6640831,-27.2862953),
(8,'São Bento',38.6606726,-27.2132604),
(8,'São Pedro',38.6575,-27.229722),
(8,'Sé',38.655556,-27.221111),
(8,'Serreta',38.7458827,-27.3744535),
(8,'Terra chá',38.6722653,-27.2610231),
(8,'Vila de São Sebastião',38.6676548,-27.0953112),

/*Freguesias do concelho da Praia da Victoria da ilha de Terceira*/
(9,'Agualva',38.7755317,-27.1706994),
(9,'Biscoitos',38.7918906,-27.2601271),
(9,'Cabo da Praia',38.7052642,-27.0593325),
(9,'Fonte do Bastardo',38.6920007,-27.0948634),
(9,'Fontinhas',38.738995,-27.1221104),
(9,'Lajes',38.761401,-27.113382),
(9,'Porto Martins',38.6814663,-27.0819512),
(9,'Santa Cruz',38.7305567,-27.0750549),
(9,'Quatro Ribeiras',38.7879601,-27.2313523),
(9,'São Brás',38.7637656,-27.1365565),
(9,'Vila Nova',38.7801435,-27.1589442),

/*Freguesias do concelho da Santa Cruz da Graciosa da ilha da Graciosa*/

(10,'Santa Cruz da Graciosa',39.051667,-28.012222),
(10,'São Mateus',39.0471171,-27.9864908),
(10,'Guadalupe',39.0613808,-28.0378391),
(10,'Luz',39.0235218,-28.0014843),

/*Freguesias do concelho da Calheta da ilha da São Jorge*/

(11,'Calheta',38.6026768,-28.022561),
(11,'Norte Pequeno',38.648889,-28.001389),
(11,'Ribeira Seca',38.602222,-28.005),
(11,'Santo Antão',38.602222,-28.005),
(11,'Vila do Topo',38.549167,-27.7675),

/*Freguesias do concelho das Velas da ilha da São Jorge*/

(12,'Manadas',38.6342372,-28.1062138),
(12,'Norte Grande',38.673349,-28.0739096),
(12,'Rosais',38.7187162,-28.26087),
(12,'Santo Amaro',38.6805846,-28.1949306),
(12,'Urzelina',38.6524546,-28.1461144),
(12,'Velas',38.6840593,-28.2307167),

/*Freguesias do concelho das Lajes do Pico da ilha da Pico*/

(13,'Calheta de Nesquim',38.4035464,-28.0874276),
(13,'Lajes do Pico',38.3956575,-28.2450343),
(13,'Piedade',38.4273363,-28.062526),
(13,'Ribeiras',38.4045553,-28.1918514),
(13,'Ribeirinha',37.8269544,-25.5050398),
(13,'São João',38.4159381,-28.3422375),

/*Freguesias do concelho da Madalena da ilha da Pico*/

(14,'Bandeiras',38.5379193,-28.4692454),
(14,'Candelária',38.4644763,-28.5209047),
(14,'Criação Velha',38.5105557,-28.5300028),
(14,'Madalena',38.5321513,-28.5380603),
(14,'São Caetano',38.4275544,-28.4329606),
(14,'São Mateus',38.4316643,-28.466338),

/*Freguesias do concelho de São Roque do Pico da ilha da Pico*/

(15,'Prainha',38.4726241,-28.211099),
(15,'Santa Luzia',38.547192,-28.4003341),
(15,'Santo Amaro',38.4548569,-28.1789983),
(15,'Santo António',38.5352254,-28.3454776),
(15,'São Roque do Pico',38.5166249,-28.3182478),

/*Freguesias do concelho Horta da ilha ilha do Faial */

(16,'Angústias',38.5289595,-28.631298),
(16,'Capelo',38.5858279,-28.8065648),
(16,'Castelo Branco',38.5220312,-28.7205363),
(16,'Cedros',38.6310353,-28.6956239),
(16,'Conceição',38.5493731,-28.6319805),
(16,'Feteira',38.5267819,-28.676827),
(16,'Flamengos',38.5479467,-28.6573542),
(16,'Matriz',38.5389788,-28.6318349),
(16,'Pedro Miguel',38.574289,-28.6325383),
(16,'Praia do Almoxarife',38.5580988,-28.6294699),
(16,'Praia do Norte',38.6048812,-28.7703181),
(16,'Salão',38.6139523,-28.6623645),

/*Freguesias do Lajes das Flores da ilha das flores */

(17,'Fajã Grande',39.4546562,-31.2663979),
(17,'Fajãzinha',39.4336531,-31.2551916),
(17,'Fazenda',39.3898156,-31.1750364),
(17,'Lajedo',39.3922103,-31.2506023),
(17,'Lajes das Flores',39.3803706,-31.1864198),
(17,'Lomba',39.402352,-31.1614859),
(17,'Mosteiro',39.412884,-31.252311),

/*Freguesias da Santa Cruz das Flores da ilha das flores */

(18,'Caveira',39.4302349,-31.1524253),
(18,'Cedros',39.4809738,-31.1594153),
(18,'Ponta Delgada',39.5152893,-31.2187887),
(18,'Santa Cruz',39.4557284,-31.1418414);