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

('Ponta Delgada',1,37.7449941,-25.6959568),
('Ribeira Grande',1,37.818664,-25.5414106),
('Lagoa',1,37.7493042,-25.5932738),
('Vila Franca do Campo',1,37.7205584,-25.4447437),
('Nordeste',1,37.8321064,-25.1550008),
('Povoação',1,37.7486685,-25.2478451),

/*Concelhos da ilha de Santa Maria*/
('Vila do Porto',2,36.966217,-25.1904626),

/*Concelhos da ilha da Terçeira*/
('Angra do Heroísmo',3,38.6595096,-27.24766),
('Praia da Vitória',3,38.7329487,-27.0816819),

/*Concelhos da Graciosa*/
('Santa da cruz da graciosa',4,39.0881588,-28.0337622),

/*Concelhos da Ilha de São Jorge*/
('Calheta de São Jorge',5,38.6026768,-28.022561),
('Velas',5,38.684077,-28.2219619),

/*Concelhos da Ilha do Pico */
('Lajes do Pico',6,38.3956911,-28.2450343),
('Madalena',6,38.5321849,-28.5380603),
('São Roque do Pico',6,38.5166417,-28.3182478),

/*Concelhos da Ilha do Faial */
('Horta',7,38.5347113,-28.6543395),


/*Conselhos da Ilha das Flores*/
('Lajes das Flores',8,39.3803706,-31.1864198),
('Santa Cruz das Flores',8,39.4557284,-31.1418414),

/*Conselhos da Ilha do Corvo*/
('Vila do Corvo',9,36.966217,-25.1904626);

INSERT INTO freguesia (id_conselho,nome,latitude,longitude) VALUES

/*Freguesias do concelho de Ponta Delgada da ilha de São Miguel*/
('Ajuda da Bretanha',1,37.8980602,-25.7588557),
('Arrifes',1,37.7623793,-25.7330287),
('Candelária',1,37.8269871,-25.8407667),
('Vila das Capelas',1,37.8352561,-25.7044377),
('Covoada',1,37.7854951,-25.7505647),
('Fajã de Baixo',1,37.7590509,-25.6735364),
('Fajã de Cima',1,37.768771,-25.6790938),
('Fenais da Luz',1,37.8265054,-25.6512415),
('Feteiras',1,37.8030178,-25.8093205),
('Ginetes',1,37.8501355,-25.8554152),
('Livramento',1,37.7648381,-25.6211347),
('Mosteiros',1,37.8917364,-25.8317652),
('Pilar da Bretanha',1,37.8981217,-25.7638837),
('Relva',1,37.7532343,-25.7363831),
('Remédios',1,37.8862511,-25.7442928),
('Santa Bárbara',1,37.7986944,-25.551882),
('Santa Clara',1,37.7362798,-25.6946256),
('Santo António',1,37.8572513,-25.7208828),
('São José',1,37.7398596,-25.6808437),
('São Pedro',1,37.7452804,-25.6571215),
('São Roque',1,37.755484,-25.6765199),
('São Sebastião',1,37.7400917,-25.6704464),
('São Vicente Ferreira',1,37.8213642,-25.704156),
('Sete Cidades',1,37.8592674,-25.8126787),

/*Freguesias do concelho da Ribeira Grande da ilha de São Miguel*/
('Calhetas',2,37.8212934,-25.618229),
('Conceição',2,37.8186301,-25.5414105),
('Fenais da Ajuda',2,37.8510855,-25.3340222),
('Lomba da Maia',2,37.8308683,-25.3713373),
('Lomba de São Pedro',2,37.8499661,-25.3188071),
('Maia',2,37.8315475,-25.400777),
('Pico da Pedra',2,37.8027296,-25.6299236),
('Porto Formoso',2,37.8225648,-25.4355813),
('Vila do Rabo de Peixe',2,37.8069509,-25.6166423),
('Ribeira Seca',2,37.8078072,-25.5591777),
('Ribeirinha',2,37.8269534,-25.5138377),
('Santa Bárbara',2,37.7986944,-25.551882),
('São Brás',2,37.8191069,-25.4204965),

/*Freguesias do concelho da Lagoa da ilha de São Miguel*/
('Vila de Água de Pau',3,37.7212294,-25.5151033),
('Cabouco',3,37.7627924,-25.5740476),
('Rosário',3,37.7451662,-25.5779905),
('Ribeira Chã',3,37.7213483,-25.4925084),
('Santa Cruz',3,37.7438958,-25.5688685),

/*Freguesias do concelho da Vila Franco do Campo da ilha de São Miguel*/
('Água De Alto',4,37.7204104,-25.4667046),
('Ponta Garça',4,37.720881,-25.3753818),
('Ribeira das Taínhas',4,37.7180726,-25.4107762),
('Ribeira Seca',4,37.7211526,-25.4279423),
/*Cunt São Miguel e São Pedro da Vila do Campo do São Miguel removed*/

/*Freguesias do concelho do Nordeste da ilha de São Miguel*/
('Achada',5,37.8532879,-25.2745629),
('Achadinha',5,37.8497468,-25.2920079),
('Lomba da Fazenda',5,37.8447311,-25.1752568),
('Nordeste',5,37.833333,-25.146389),
('Salga',5,37.8458159,-25.3086376),
('Santo António de Nordestinho',5,37.852222,-25.2125),
('São Pedro Nordestinho',5,37.8503489,-25.2011348),

/*Freguesias do concelho da Povoação da ilha de São Miguel*/
('Água Retorta',6,37.7623181,-25.1640451),
('Faial da Terra',6,37.7451316,-25.2070142),
('Furnas',6,37.7736483,-25.3190233),
('Remédios',6,37.8862598,-25.7398939),
('Povoação',6,37.7486685,-25.2478451),
('Ribeira Quente',6,37.7334829,-25.3069961),

/*Freguesias do concelho da Vila do Porto da ilha de Santa Maria*/
('Almagreira',7,36.9651343,-25.1129652),
('Santa Bárbara',7,36.9824829,-25.0788689),
('Santo Espírito',7,36.958772,-25.0629904),
('São Pedro',7,36.9796871,-25.1351311),
('Vila do Porto',7,36.966217,-25.1904626),



/*Freguesias do concelho da Angra do Heroísmo da ilha de Terceira*/
('Altares',8,38.7913641,-27.303772),
('Cinco Ribeiras',8,38.6875387,-27.317222),
('Doze Ribeiras',8,38.7155047,-27.3680243),
('Feteira',8,38.6541354,-27.1584842),
('Conceição',8,38.6562416,-27.2127142),
('Porto Judeu',8,38.6491531,-27.1273967),
('Posto Santo',8,38.678682,-27.2400683),
('Raminho',8,38.7884205,-27.3337483),
('Ribeirinha',8,38.6617376,-27.1898103),
('Santa Bárbara',8,38.6962764,-27.3460722),
('Santa Luzia',8,38.6606963,-27.2294146),
('São Mateus da Calheta',8,38.6640831,-27.2862953),
('São Bento',8,38.6606726,-27.2132604),
('São Pedro',8,38.6575,-27.229722),
('Sé',8,38.655556,-27.221111),
('Serreta',8,38.7458827,-27.3744535),
('Terra chá',8,38.6722653,-27.2610231),
('Vila de São Sebastião',8,38.6676548,-27.0953112),

/*Freguesias do concelho da Praia da Victoria da ilha de Terceira*/
('Agualva',9,38.7755317,-27.1706994),
('Biscoitos',9,38.7918906,-27.2601271),
('Cabo da Praia',9,38.7052642,-27.0593325),
('Fonte do Bastardo',9,38.6920007,-27.0948634),
('Fontinhas',9,38.738995,-27.1221104),
('Lajes',9,38.761401,-27.113382),
('Porto Martins',9,38.6814663,-27.0819512),
('Santa Cruz',9,38.7305567,-27.0750549),
('Quatro Ribeiras',9,38.7879601,-27.2313523),
('São Brás',9,38.7637656,-27.1365565),
('Vila Nova',9,38.7801435,-27.1589442),

/*Freguesias do concelho da Santa Cruz da Graciosa da ilha da Graciosa*/

('Santa Cruz da Graciosa',10,39.051667,-28.012222),
('São Mateus',10,39.0471171,-27.9864908),
('Guadalupe',10,39.0613808,-28.0378391),
('Luz',10,39.0235218,-28.0014843),

/*Freguesias do concelho da Calheta da ilha da São Jorge*/

('Calheta',11,38.6,-27.95),
('Norte Pequeno',11,38.648889,-28.001389),
('Ribeira Seca',11,38.602222,-28.005),
('Santo Antão',11,38.602222,-28.005),
('Vila do Topo',11,38.549167,-27.7675),

/*Freguesias do concelho das Velas da ilha da São Jorge*/

('Manadas',12,38.6342372,-28.1062138),
('Norte Grande',12,38.673349,-28.0739096),
('Rosais',12,38.7187162,-28.26087),
('Santo Amaro',12,38.6805846,-28.1949306),
('Urzelina',12,38.6524546,-28.1461144),
('Velas',12,38.6840593,-28.2307167),

/*Freguesias do concelho da da ilha da Pico*/

('Lajes do Pico',6,38.3956911,-28.2450343),
('Madalena',6,38.5321849,-28.5380603),
('São Roque do Pico',6,38.5166417,-28.3182478),
