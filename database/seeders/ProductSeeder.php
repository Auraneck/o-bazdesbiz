<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $farces = Category::where('name', 'Farces et Attrapes')->first();
        $bonbons = Category::where('name', 'Bonbons')->first();
        $jouets = Category::where('name', 'Jouets')->first();
        $electronique = Category::where('name', 'Électronique')->first();
        $firework = Category::where('name', 'Fire work')->first();
        $triche = Category::where('name', 'Triche')->first();

        Product::create([
            'name' => 'Coussin péteur',
            'description' => 'Un classique des farces et attrapes.',
            'price' => 4.99,
            'image' => 'coussin_peteur.jpg',
            'category_id' => $farces->id,
        ]);

        Product::create([
            'name' => 'Claque doigt',
            'description' => 'Fais peur à tes amis !',
            'price' => 2.00,
            'image' => 'Claque doigt.jpg',
            'category_id' => $farces->id,
        ]);

        Product::create([
            'name' => 'Arme factice par lot de 4',
            'description' => 'Vous l attendiez tous nous l avons enfin fait des fausse arme ! Ce quitte vous permettra surtout si vous etes au USA de faire une fausse prise d otage dans votre école et pour 1 euro de plus la ceinture de faux c4 est offerte',
            'price' => 15.00,
            'image' => 'Claque doigt.jpg',
            'category_id' => $farces->id,
        ]);

        Product::create([
            'name' => 'La tasse a cafe refigerent',
            'description' => 'Votre collegue est bien trop heureux dans la vie ? offre lui cette super tasse a café qui refoidira son cafe en moins de une minute pour le rendre aigri des le matin',
            'price' => 2.00,
            'image' => 'Claque doigt.jpg',
            'category_id' => $farces->id,
        ]);

        Product::create([
            'name' => 'Bizon (pas vraiment fute)',
            'description' => '"CA VA PETE" a dit un jour un grand homme apres avoir lance une boite de bizon fute.',
            'price' => 14.99,
            'image' => 'BizonFute.jpg',
            'category_id' => $farces->id,
        ]);

        Product::create([
            'name' => 'Spray puant lot complet',
            'description' => 'Cet item legendrere est un artefact utilise jadis par les plus grand hommes pour faire les plus redoutable farfaprank comme par exemple Lee Harvey Oswald (le discret) ou meme Joseph Goebbels qui doit encore payer EDF.',
            'price' => 39.45,
            'image' => 'Spray.jpg',
            'category_id' => $farces->id,
        ]);

        Product::create([
            'name' => 'Les milles ans de souffrance',
            'description' => 'Suite a l idiotie de l un de nos alternant son maitre de stage crée cette technique permettant de calmer tout type de personne en tout type de situation (a ne pas pratique dans un club echangiste ou avec des masochiste)',
            'price' => 1.99,
            'image' => 'milleans.jpg',
            'category_id' => $farces->id,
        ]);

        Product::create([
            'name' => 'chewing gum TASER',
            'description' => 'Le chewing gum TASER est une bonne farce entre ami mais aussi un arme d autodefence efficace ! Avec un bouton rotatif ajustez le voltage et propose une pause bonbon a votre agresseur.',
            'price' => 14.99,
            'image' => 'BizonFute.jpg',
            'category_id' => $farces->id,
        ]);

        Product::create([
            'name' => 'Deguisement de sac de frappe',
            'description' => 'HAHA rien de mieux que de surprendre vos ami en pleine entrenement de MMA, cachez vous dans le sac avant l heure de pointe et attendait 1h avant de sortir du sac pour faire peur a vos amis (nous ne prenons en charge aucun frai medicaux suite a l utilisation de ce deguisement)',
            'price' => 75.99,
            'image' => 'Frappe.jpg',
            'category_id' => $farces->id,
        ]);

        Product::create([
            'name' => 'Pate a proute comestible',
            'description' => 'Suite a notre engagement ecologique nous avons dessidé de modifier la composition de notre pate a proute pour quel puisse etre comestible, maintenant apres une bonne journé de carmesse vous pourrez decouper des part de pate et la manger en famille (les fraie medicaux ne sont toujours pas remboursé)',
            'price' => 14.99,
            'image' => 'BizonFute.jpg',
            'category_id' => $farces->id,
        ]);

        Product::create([
            'name' => 'Bonbons acidulés',
            'description' => 'Des bonbons qui piquent pour les amateurs de sensations fortes.',
            'price' => 2.99,
            'image' => 'bonbons_acidules.jpg',
            'category_id' => $bonbons->id,
        ]);

        Product::create([
            'name' => 'Baton de la mort',
            'description' => 'Un bâton de la mort était le nom donné à une substance illicite et hautement addictive, facilement accessible dans les bas-fonds de Coruscant et à de nombreux autres endroits de la galaxie. Vendus dans des tubes fluorescents, ils étaient appréciés des accros désespérés et des chercheurs de sensations fortes. Produits dans les laboratoires pharmaceutiques illégaux de Coco Town, les bâtons de la mort étaient faits à base d ixetal cilona distillé et raffiné, extrait des champignons balo de la planète Balosar.',
            'price' => 10.00,
            'image' => 'batondelamort.jpg',
            'category_id' => $bonbons->id,
        ]);

        Product::create([
            'name' => 'Bonbons croustillant',
            'description' => 'Des bonbons croustillant ??? mais quelle idée.',
            'price' => 0.50,
            'image' => 'Bonbonscroustillant.jpg',
            'category_id' => $bonbons->id,
        ]);

        Product::create([
            'name' => 'Sucette a croquer',
            'description' => 'Apres les bonbon croustillant un sucette a croquer mais la vie de mon lapin ou va le monde.',
            'price' => 0.50,
            'image' => 'Bonbonscroustillant.jpg',
            'category_id' => $bonbons->id,
        ]);

        Product::create([
            'name' => 'Arlequin sucré au sucré',
            'description' => 'Nous avons volez la recette de ses bonbon Ulta Nutitifs developper par UNICEF dans le cas de mal nutrition du bebe... cela aurait été domage de ne pas faire de profit avec.',
            'price' => 0.50,
            'image' => 'Bonbonscroustillant.jpg',
            'category_id' => $bonbons->id,
        ]);

        Product::create([
            'name' => 'Bonbons Bertie Botts Beans',
            'description' => 'Une chance sur 2 de manger un Bonbon Caca ou poubelle, venez tester nos bonbon approuvé par Dumbledore.',
            'price' => 6.50,
            'image' => 'Bonbonscroustillant.jpg',
            'category_id' => $bonbons->id,
        ]);

        Product::create([
            'name' => 'Pomme',
            'description' => 'Tu prends trop de sucre ? testes notre nouveau produit ! Créer a partir de matiere vegetal, notre creation est une revolution dans le domaine agricole.',
            'price' => 8.99,
            'image' => 'Pomme.jpg',
            'category_id' => $bonbons->id,
        ]);

        Product::create([
            'name' => 'Tête brulé',
            'description' => 'Cet article de frapadingue vous propulsera dans les étoiles, à consommer avec moderation pour tout abus parlez en à votre medecin.',
            'price' => 4.99,
            'image' => 'tetebrule.jpg',
            'category_id' => $bonbons->id,
        ]);

        Product::create([
            'name' => 'Orteil de goblin',
            'description' => 'Apres la defaite de Sarouman dans la terre du milieu, le roi des goblins a perdu la protection du grand sorcier. Suite a cette evenement les elfs et les hommes se sont alier pour chasser cette vermine loin de leur terre. Et un jour d hiver Herendil et Bastin appartenant au groupe des denichers de vermine se retrouvers sans nouriture et a plus de 50km de leur camp, ils n eurent donc d autre choix que de manger ces infames goblin temps detesté ... et sur un pari perdu par l humain l elfe lui demanda de manger un orteil. ET C EST LA !!! C est a ce moment que le monde decouvrit le gout formidable des orteils de goblin. Suite a cette evenement des fast food de goblin on ouvert et les frites on était remplacé par des delicieux orteil. Les chercheur on decouvert que la consomation de 100g d orteil guerirer les gens du cancer mais mieux que ca les guerires de la calvicie',
            'price' => 0.50,
            'image' => 'Bonbonscroustillant.jpg',
            'category_id' => $bonbons->id,
        ]);

        Product::create([
            'name' => 'Robot télécommandé',
            'description' => 'Un jouet amusant pour les enfants.',
            'price' => 29.99,
            'image' => 'robot_telecommande.jpg',
            'category_id' => $jouets->id,
        ]);

        Product::create([
            'name' => 'Robot mixer télécommandé',
            'description' => 'Un jouet amusant pour tous les enfants, pensez a prendre des gants.',
            'price' => 28.99,
            'image' => 'robotmixer.jpg',
            'category_id' => $jouets->id,
        ]);

        Product::create([
            'name' => 'Robot de combat',
            'description' => 'Muni de ca propre ceinture explosive le robot de combat est un joué parfait pour quelques secondes de fun.',
            'price' => 589.00,
            'image' => 'robotcombat.jpg',
            'category_id' => $jouets->id,
        ]);

        Product::create([
            'name' => 'Dépression MAN',
            'description' => 'Le nouveau Depression MAN est arrivé chez nous ! Trouve le moyen de le sortir de ca dépression avant qu il saute du balcon.',
            'price' => 29.99,
            'image' => 'depressionman.jpg',
            'category_id' => $jouets->id,
        ]);

        Product::create([
            'name' => 'Mini drone',
            'description' => 'Un gadget électronique pour les amateurs de nouvelles technologies.',
            'price' => 49.99,
            'image' => 'mini_drone.jpg',
            'category_id' => $electronique->id,
        ]);

        Product::create([
            'name' => 'Mini drone à tete chercheuse',
            'description' => 'Wow cible ton harceleur d école et cours tres vite aux îles Caïmans.',
            'price' => 49.99,
            'image' => 'dronetete.jpg',
            'category_id' => $electronique->id,
        ]);

        Product::create([
            'name' => 'Fourchette dans prise',
            'description' => 'Cet boite est un kit contenant une fourchette et un guide pour le rentrer dans la prise élétrique, a faire la nuit pour un maximum de spéctacle son et lumière.',
            'price' => 5.69,
            'image' => 'fourchette.jpg',
            'category_id' => $electronique->id,
        ]);

        Product::create([
            'name' => 'Ordinateur importable',
            'description' => 'Cet ordinateur a été pensé pour embarque plus de 18 tonne de kryptonite, même SuperMan ne pourra pas le bouger .',
            'price' => 14999.99,
            'image' => 'ordinateur.jpg',
            'category_id' => $electronique->id,
        ]);
        
        Product::create([
            'name' => 'Feu d artifice',
            'description' => 'Un feu d artifice est un procédé pyrotechnique utilisant des explosifs déflagrants visant à produire du son, de la lumière et de la fumée à l aide d une composition pyrotechnique (en). Les feux d artifice sont originaires de Chine, où ils ont été développés à partir de la poudre noire avant d être importés en Europe, où divers alchimistes et pyrotechniciens ont participé à leur développement. Ils sont souvent utilisés dans des spectacles pyrotechniques (fêtes nationales, jour de l an, événements, etc.) et autrefois pour éloigner les esprits maléfiques..',
            'price' => 25.00,
            'image' => 'artifice.jpg',
            'category_id' => $firework->id,
        ]);

        Product::create([
            'name' => 'Feu d artifesse',
            'description' => 'Fruit de 20 ans de dur labeur, nos frafachercheur on trouvait le moyen de ralier une paire de fesse et un feu d artifice en faisant écouté du Sebastien Patoche',
            'price' => 25.01,
            'image' => 'artifesse.jpg',
            'category_id' => $firework->id,
        ]);

        Product::create([
            'name' => 'Feu d arc-en-ciel',
            'description' => 'Degoupillez la boite et laissez l arc-en-ciel senvoler ! Avec un peu de chance des farfadé malicieux pourraient venir vous dépouiller ',
            'price' => 5000.00,
            'image' => 'arcenciel.jpg',
            'category_id' => $firework->id,
        ]);

        Product::create([
            'name' => 'Avada kedavra',
            'description' => 'Ce baton est un prouesse d ingéniosité, muni d un couloir de TNT relier avec de la red stone, une fois le bouton enclanché cela crée une reaction faisant glisser les TNT allumé vers une seul TNT qui a été allumé quelques secondes apres propulsant de se fait cette TNT vers lavant ! Testé et approuvé par Sirius Black ',
            'price' => 1.00,
            'image' => 'Voldemor.jpg',
            'category_id' => $firework->id,
        ]);

        Product::create([
            'name' => 'Kety parry',
            'description' => 'Nous somme fiere de vous proposer notre premiere colab avec la chanteuse kety parry avec la creation de feu d artifice spécialement pour le 2 juillet.',
            'price' => 10.00,
            'image' => 'katy.jpg',
            'category_id' => $firework->id,
        ]);

        Product::create([
            'name' => 'God Mod',
            'description' => 'Nous avons trouvé le moyen d ouvrir le terminal de la vie, il ne vous restera plus qu a taper /gamemode 0',
            'price' => 0.10,
            'image' => 'god.jpg',
            'category_id' => $triche->id,
        ]);

        Product::create([
            'name' => 'konami code',
            'description' => 'haut, haut, bas, bas, gauche, droite, gauche, droite, B, A, puis roulez vous dans du becon et danser sous la plaine lune. Une fois fait vous aurez un point de spawn',
            'price' => 1.00,
            'image' => 'konami.jpg',
            'category_id' => $triche->id,
        ]);

        Product::create([
            'name' => 'One UP',
            'description' => 'Produit par un plombié nain moustachu ce champignon magique vous donnera une seconde vie enfin ... c est ce qu il nous a dit ... ATTENTION il a comme un gout de fond de tuyau',
            'price' => 1.10,
            'image' => 'one.jpg',
            'category_id' => $triche->id,
        ]);

        Product::create([
            'name' => 'Le codex de la triche',
            'description' => 'Artefacte de catégorie Androméda, le codex a été trouvé pres de la tombe de Ctulu au fin fond du pacific. Il est raconté qu il aurait été utilisé par Moïse pour écarte la mer rouge',
            'price' => 0.00,
            'image' => 'codex.jpg',
            'category_id' => $triche->id,
        ]);

        Product::create([
            'name' => 'Cape d invisibilité',
            'description' => 'Cet cape a été forgé par un aveugle de profession, quand vous la protez les aveugles dans un perimetre de 15 metres ne vous voie plus',
            'price' => 1.00,
            'image' => 'cape.jpg',
            'category_id' => $triche->id,
        ]);

        Product::create([
            'name' => 'La carte facilité scenaristique',
            'description' => 'Sortez cette carte au bon moment elle vous permettera de vous sortir de tout type de situation, Cancer, un date tinder vraiment moche, la poutre de bamaco etc PS: la carte ne marche pas en cas de diné avec la belle famille',
            'price' => 0.10,
            'image' => 'god.jpg',
            'category_id' => $triche->id,
        ]);

        Product::create([
            'name' => 'Manuel fourchelangue',
            'description' => 'Nous vous proposons un cours avec Manuel pour apprendre le fourchelangue qui comme son nom l indique vous fait fourcher la langue. En quoi cela est de la triche et bien vous savez, moi je ne crois pas qu il y ait de bonne ou de mauvaise situation. Moi, si je devais résumer ma vie aujourd hui avec vous, je dirais que c est d abord des rencontres. Des gens qui m ont tendu la main, peut-être à un moment où je ne pouvais pas, où j étais seul chez moi. Et c est assez curieux de se dire que les hasards, les rencontres, forgent une destinée... Parce que quand on a le goût de la chose, quand on a le goût de la chose bien faite, le beau geste, parfois on ne trouve pas l interlocuteur en face je dirais, le miroir qui vous aide à avancer. Alors ça n est pas mon cas, comme je disais là, puisque moi au contraire, j ai pu : et je dis merci à la vie, je lui dis merci, je chante la vie, je danse la vie... je ne suis qu amour ! Et finalement, quand beaucoup de gens aujourd hui me disent « Mais comment fais-tu pour avoir cette humanité ? », et bien je leur réponds très simplement, je leur dis que c est ce goût de l amour ce goût donc qui m a poussé aujourd hui à entreprendre une construction mécanique, mais demain qui sait ? Peut-être simplement à me mettre au service de la communauté, à faire le don, le don de soi...',
            'price' => 0.10,
            'image' => 'god.jpg',
            'category_id' => $triche->id,
        ]);

        Product::create([
            'name' => 'Lampe a genie',
            'description' => 'La lampe a genie est un objet rare qui vous permet d invoqué un genie dans la spécialté voulu comme par exemple un expert en laravel pour votre projet ou bien meme rediger votre rapport d activité ! Mais que ne sais pas faire le geni ? et bien pour le moment il ne sais pas faire de ctrl C ctrl V vous devez donc l aider a vous aider mais ne vous inquiete pas la prochaine version sera plus performente',
            'price' => 0.10,
            'image' => 'god.jpg',
            'category_id' => $triche->id,
        ]);

    }
} 
