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
        	"Inicio": "dolor en la pierna",
        	"EVA inicio": "5",
        	"Evolución": "va bien",
        	"Eva evolución": "3",
        	"Actual": "ya salió",
        	"EVA actual": "0"
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
            "Condición": "Sí",
            "Cual": "la panza"
          },
          "Aparato cardiovascular": {
            "Condición": "No",
            "Cual": ""
          },
          "Aparato respiratorio": {
            "Condición": "No",
            "Cual": ""
          },
          "Aparato úrinario": {
            "Condición": "No",
            "Cual": ""
          },
          "Aparato genital": {
            "Condición": "No",
            "Cual": ""
          },
          "Aparato hematológico": {
            "Condición": "No",
            "Cual": ""
          },
          "Sistema endócrino": {
            "Condición": "No",
            "Cual": ""
          },
          "Sistema nervioso": {
            "Condición": "No",
            "Cual": ""
          },
          "Sistema sensorial": {
            "Condición": "No",
            "Cual": ""
          },
          "Sistema osteomuscular": {
            "Condición": "No",
            "Cual": ""
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
        		"Estado general de nutrición": "Bien"
        	},
        	"Exploración por región": {
        		"Piel y anexos": "Datos",
        		"Cabeza": "Datos",
        		"Ojos": "Dos",
        		"Oídos": "Datos",
        		"Nariz y senos P-N": "Aquí va algo",
        		"Boca": " ",
        		"Tórax": " ",
        		"Vasos sanguíneos": " ",
        		"Mamas": " ",
        		"Genitales": " "
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
