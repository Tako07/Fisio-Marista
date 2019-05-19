<?php

use Illuminate\Database\Seeder;
use App\Models\historia_clinica;

class historiaClinicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $historia= new historia_clinica();
        $historia->id_paciente='1';
        $historia->ant_heredo_fam=
        '{
        	"Enfermedades reumatológicas": {
        		"condición": "No",
        		"familiar": "",
            "cuál":"ninguna"
        	},
        	"Enfermedades del sistema nervioso": {
            "condición": "no",
        		"familiar": "",
            "cuál":"ninguna"
        	},
        	"Síndromes": {
            "condicián": "Sí",
        		"familiar": "Madre",
            "cuál":"Síndrome de Estocolmo"
        	},
        	"Malformaciones": {
            "condición": "No",
        		"familiar": "",
            "cuál":"ninguna"
        	},
        	"Diabetes": {
            "condición": "No",
        		"familiar": "",
            "cuál":"ninguna"
        	},
        	"Hipertención arterial sistemática": {
            "condición": "No",
        		"familiar": "",
            "cuál":"ninguna"
        	},
        	"Cáncer": {
            "condición": "No",
        		"familiar": "",
            "cuál":"ninguna"
        	},
        	"Cardiopatías": {
            "condición": "No",
        		"familiar": "",
            "cuál":"ninguna"
        	},
        	"Vasculares": {
            "condición": "No",
        		"familiar": "",
            "cuál":"ninguna"
        	},
        	"Pulmonares": {
            "condición": "No",
        		"familiar": "",
            "cuál":"ninguna"
        	},
        	"Heptopatías": {
            "condición": "No",
        		"familiar": "",
            "cuál":"ninguna"
        	},
        	"Nefropatías": {
            "condición": "No",
        		"familiar": "",
            "cuál":"ninguna"
        	},
        	"Digestivos": {
            "condición": "No",
        		"familiar": "",
            "cuál":"ninguna"
        	},
        	"Endocrinopatías": {
            "condición": "No",
        		"familiar": "",
            "cuál":"ninguna"
        	},
        	"Transtornos hematológicos": {
            "condición": "No",
        		"familiar": "",
            "cuál":"ninguna"
        	},
        	"Displidemias": {
            "condición": "No",
        		"familiar": "",
            "cuál":"ninguna"
        	},
        	"Otros": {
            "condición": "No",
        		"familiar": "",
            "cuál":"ninguna"
        	}
        }';
        $historia->ant_pers_no_pat=
        '{
        	"Tipo construcción no favorable": {
        		"condición": "sí",
        		"cuál": "obra negra"
        	},
        	"Suelo no regular": {
        		"condición": "no",
        		"cuál": ""
        	},
        	"Escaleras que dificulten actividades de la vida diaria (avd)": {
            "condición": "no",
        		"cuál": ""
        	},
        	"Ventilación inadecuada": {
            "condición": "no",
        		"cuál": ""
        	},
        	"Hacinamiento": {
            "condición": "no",
        		"cuál": ""
        	},
        	"Adaptaciones para sus avd": {
            "condición": "no",
        		"cuál": ""
        	},
        	"Servicios de agua": {
            "condición": "no",
        		"cuál": ""
        	},
        	"Servicio de luz": {
            "condición": "no",
        		"cuál": ""
        	},
        	"Servicio de drenaje inadecuado": {
            "condición": "no",
        		"cuál": ""
        	},
        	"Hábitos personales de baño": {
            "condición": "no",
        		"cuál": ""
        	},
        	"Higiene bucal": {
            "condición": "no",
        		"cuál": ""
        	},
        	"Defecación": {
            "condición": "no",
        		"cuál": ""
        	},
        	"Tabaquismo": {
            "condición": "no",
        		"cuál": ""
        	},
        	"Alcoholismo": {
            "condición": "no",
        		"cuál": ""
        	},
        	"Toxicomanías": {
            "condición": "no",
        		"cuál": ""
        	},
        	"Alimentación": {
            "condición": "no",
        		"cuál": ""
        	},
        	"Trabajo-Descanso": {
            "condición": "no",
        		"cuál": ""
        	},
        	"Pasatiempo": {
            "condición": "no",
        		"cuál": ""
        	},
        	"Deporte": {
            "condición": "no",
        		"cuál": ""
        	}
        }'
        ;
        $historia->ant_pers_pat=
        '{
        	"Enfermedades de la infancia": {
        		"condición": "sí",
        		"cuál": "peste negra"
        	},
        	"Quirúrgicas": {
            "condición": "no",
        		"cuál": ""
        	},
        	"Traumatismos": {
            "condición": "no",
        		"cuál": ""
        	},
        	"Infiltraciones": {
            "condición": "no",
        		"cuál": ""
        	},
        	"Hospitalizaciones": {
            "condición": "no",
        		"cuál": ""
        	},
        	"Perdida del conocimiento": {
            "condición": "no",
        		"cuál": ""
        	},
        	"Intolerancia a medicamentos": {
            "condición": "no",
        		"cuál": ""
        	},
        	"Transfuciones": {
            "condición": "no",
        		"cuál": ""
        	},
        	"Medicamentos": {
            "condición": "no",
        		"cuál": ""
        	},
        	"ETS": {
            "condición": "no",
        		"cuál": ""
        	}
        }'
        ;
        $historia->save();
    }
}
