<?php
class Monstro {
    public function __construct(
        public string $nome,
        public int $vida,
        public int $ataque,
        public string $cor,
        public string $habilidade
    ) {}
    
    public function clonar(string $novoNome): Monstro {
        $copia = clone $this;
        $copia->nome = $novoNome;
        return $copia;
    }
}

class FabricaDeMonstros {
    private array $monstrosBase = [];
    
    public function __construct() {
        $this->monstrosBase = [
            'goblin' => new Monstro('Goblin', 50, 10, 'Verde', 'Roubo'),
            'orc' => new Monstro('Orc', 100, 60, 'Verde', 'Força Bruta'),
            'esqueleto' => new Monstro('Esqueleto', 30, 15, 'Branco', 'Regeneração'),
            'minotauro' => new Monstro('Minotauro', 150, 10, 'Marrom', 'Batida com a Cabeça'),
            'jinwoo' => new Monstro('Desgraçado', 9999, 9999, 'Branco Coreano', 'Sem necessidade deixar esse cara forte no anime')
        ];
    }
    
    public function criarMonstro( $tipo,  $nome): Monstro {
        if (empty($this->monstrosBase[$tipo])) {
            throw new Exception("Tipo de monstro '$tipo' não existe");
        }
        
        return $this->monstrosBase[$tipo]->clonar($nome);
    }
}

// USO PRÁTICO
$fabrica = new FabricaDeMonstros();

$meuGoblin = $fabrica->criarMonstro('goblin', 'Goblinzinho');
$meuOrc = $fabrica->criarMonstro('orc', 'Thrall');
$meuesqueleto = $fabrica->criarMonstro('esqueleto','Rei Caveira');
$oboi = $fabrica->criarMonstro('minotauro','Minotauro');
$coreanosafado = $fabrica->criarMonstro('jinwoo','Jinwoo (samsung)');
echo "Monstro: {$meuGoblin->nome}, Vida: {$meuGoblin->vida}, Habilidade: {$meuGoblin->habilidade}\n";
echo "Monstro: {$meuOrc->nome},  Vida: {$meuOrc->vida}, Ataque: {$meuOrc->ataque}, Habilidade: {$meuOrc->habilidade}\n";
echo "Monstro: {$meuesqueleto->nome},  Vida: {$meuesqueleto->vida} ,Ataque: {$meuesqueleto->ataque}, Habilidade: {$meuesqueleto->habilidade}\n";
echo "Monstro: {$oboi->nome}, Vida: {$oboi->vida}, Ataque: {$oboi->ataque}, {$oboi->ataque}, Habilidade: {$oboi->habilidade}\n";
echo "Monstro: {$coreanosafado->nome}, Vida: {$coreanosafado->vida} ,Ataque: {$coreanosafado->ataque}, Habilidade: {$coreanosafado->habilidade}\n";
?>