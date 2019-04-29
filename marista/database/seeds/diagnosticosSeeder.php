<?php

use Illuminate\Database\Seeder;
use App\Models\diagnostico;

class diagnosticosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $diagnostico= new diagnostico();
        $diagnostico->id_paciente='1';
        $diagnostico->padecimiento_actual='
        {
        	"inicio": "dolor en la pierna",
        	"eva inicio": "5",
        	"evolucion": "va bien",
        	"eva evolucion": "3",
        	"actual": "ya salió",
        	"eva actual": "0"
        }
        ';

        $diagnostico->sintomas_generales='
          {
		      "Astenia":"no",
		      "Andinamia":"no",
		      "Anorexia":"no",
		      "Fiebre":"no",
		      "Perdida de peso":"no"
	       }

        ';

        $diagnostico->aparatos_sistemas='
        {
          "Aparato digestivo": {
            "condicion": "si",
            "cual": "la panza"
          },
          "Aparato cardiovascular": {
            "condicion": "no",
            "cual": ""
          },
          "Aparato respiratorio": {
            "condicion": "no",
            "cual": ""
          },
          "Aparato urinario": {
            "condicion": "no",
            "cual": ""
          },
          "Aparato genital": {
            "condicion": "no",
            "cual": ""
          },
          "Aparato hematológico": {
            "condicion": "no",
            "cual": ""
          },
          "Sistema endocrino": {
            "condicion": "no",
            "cual": ""
          },
          "Sistema nervioso": {
            "condicion": "no",
            "cual": ""
          },
          "Sistema sensorial": {
            "condicion": "no",
            "cual": ""
          },
          "Sistema osteomuscular": {
            "condicion": "no",
            "cual": ""
          }
        }
        ';
        $diagnostico->exploracion='
        {
        	"Exploración Física": {
        		"T.A.": "12",
        		"F.C.": "32",
        		"F.R.": "4",
        		"Temp": "35°",
        		"Talla": "32",
        		"S02": "7",
        		"Peso actual": "56KG",
        		"Peso anterior": "56KG",
        		"Peso ideal": "60KG",
        		"IMC": "12"
        	},
        	"Exploración general": {
        		"Exploración de conciencia": "bien",
        		"Actitud": "Positiva",
        		"Movimientos anormales": "no",
        		"Postura": "Bien",
        		"Marcha": "reversa",
        		"Estado general de nutricion": "Bien"
        	},
        	"Exploración por región": {
        		"Piel y anexos": "Aquí va piel y anexos",
        		"Cabeza": "una",
        		"Ojos": "Dos",
        		"Oídos": "También dos",
        		"Nariz y senos P-N": "Aquí va algo",
        		"Boca": "Una",
        		"Tórax": "Uno",
        		"Vasos sanguíneos": "Muchos",
        		"Mamas": "Aquí va algo",
        		"Genitales": "Aquí va algo"
        	}
        }
        ';
        $diagnostico->musculoesqueletico='
        {
        	"Columna": {
        		"Cervival": "Aquí va algo",
        		"Dorsolumbar": "Aquí va algo",
        		"Sacroiliaca": "Aquí va algo"
        	},
        	"Miembro superior": {
        		"Hombros": "Aquí va algo",
        		"Codo": "Aquí va algo",
        		"Muñeca": "Aquí va algo",
        		"Mano": "Aquí va algo"
        	},
        	"Miembro inferior": {
        		"Cadera": "Aquí va algo",
        		"Rodilla": "Aquí va algo",
        		"Tobillo": "Aquí va algo",
        		"Pie": "Aquí va algo"
        	}
        }
        ';
        $diagnostico->postura='
        {
        	"Anterior": "Postura 1",
        	"Lateral": "Postura 2",
        	"Posterior": "Postura 3"
        }
        ';
        $diagnostico->dermatomas="ninguno";
        $diagnostico->diagnostico="Desgarre";
        $diagnostico->pronostico="va a salir bien";
        $diagnostico->objetivos="Que se cure";
        $diagnostico->plan="Con calmita";
        $diagnostico->activo='1';
        $diagnostico->save();
    }
}
