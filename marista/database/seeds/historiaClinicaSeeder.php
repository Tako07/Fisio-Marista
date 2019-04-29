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
        		"madre": "no",
        		"padre": "no",
        		"hermanos": "no"
        	},
        	"Enfermedades del sistema nervioso": {
            "madre": "no",
        		"padre": "no",
        		"hermanos": "no"
        	},
        	"Síndromes": {
            "madre": "no",
        		"padre": "no",
        		"hermanos": "no"
        	},
        	"Malformaciones": {
            "madre": "no",
        		"padre": "no",
        		"hermanos": "no"
        	},
        	"Diabetes": {
            "madre": "no",
        		"padre": "no",
        		"hermanos": "no"
        	},
        	"Hipertención arterial sistemática": {
            "madre": "no",
        		"padre": "no",
        		"hermanos": "no"
        	},
        	"Cancer": {
            "madre": "no",
        		"padre": "no",
        		"hermanos": "no"
        	},
        	"Cardiopatías": {
            "madre": "no",
        		"padre": "no",
        		"hermanos": "no"
        	},
        	"Vasculares": {
            "madre": "no",
        		"padre": "no",
        		"hermanos": "no"
        	},
        	"Pulmonares": {
            "madre": "no",
        		"padre": "no",
        		"hermanos": "no"
        	},
        	"Heptopatías": {
            "madre": "no",
        		"padre": "no",
        		"hermanos": "no"
        	},
        	"Nefropatías": {
            "madre": "no",
        		"padre": "no",
        		"hermanos": "no"
        	},
        	"Digestivos": {
            "madre": "no",
        		"padre": "no",
        		"hermanos": "no"
        	},
        	"Endocrinopatías": {
            "madre": "no",
        		"padre": "no",
        		"hermanos": "no"
        	},
        	"Transtornos hematológicos": {
            "madre": "sí",
        		"padre": "no",
        		"hermanos": "sí"
        	},
        	"Displidermias": {
            "madre": "no",
        		"padre": "no",
        		"hermanos": "no"
        	},
        	"Otros": {
            "madre": "no",
        		"padre": "no",
        		"hermanos": "no"
        	}
        }';
        $historia->ant_pers_no_pat=
        '{
        	"Tipo construcción no favorable": {
        		"condicion": "sí",
        		"cual": "obra negra"
        	},
        	"Suelo no regular": {
        		"condicion": "no",
        		"cual": ""
        	},
        	"Escaleras que dificulten actividades de la vida diaria (avd)": {
        		"condicion": "no",
        		"cual": ""
        	},
        	"Ventilación inadecuada": {
        		"condicion": "no",
        		"cual": ""
        	},
        	"Hacinamiento": {
        		"condicion": "no",
        		"cual": ""
        	},
        	"Adaptaciones para sus avd": {
        		"condicion": "no",
        		"cual": ""
        	},
        	"Servicios de agua": {
        		"condicion": "no",
        		"cual": ""
        	},
        	"Servicio de luz": {
        		"condicion": "no",
        		"cual": ""
        	},
        	"Servicio de drenaje inadecuado": {
        		"condicion": "no",
        		"cual": ""
        	},
        	"Hábitos personales de baño": {
        		"condicion": "no",
        		"cual": ""
        	},
        	"Higiene bucal": {
        		"condicion": "no",
        		"cual": ""
        	},
        	"Defecación": {
        		"condicion": "no",
        		"cual": ""
        	},
        	"Tabaquismo": {
        		"condicion": "no",
        		"cual": ""
        	},
        	"Alcoholismo": {
        		"condicion": "no",
        		"cual": ""
        	},
        	"Toxicomanías": {
        		"condicion": "no",
        		"cual": ""
        	},
        	"Alimentación": {
        		"condicion": "no",
        		"cual": ""
        	},
        	"Inmunizaciones": {
        		"condicion": "no",
        		"cual": ""
        	},
        	"trabajo-descanso": {
        		"condicion": "no",
        		"cual": ""
        	},
        	"Pasatiempo": {
        		"condicion": "no",
        		"cual": ""
        	},
        	"Deporte": {
        		"condicion": "no",
        		"cual": ""
        	}
        }'
        ;
        $historia->ant_pers_pat=
        '{
        	"enfermedades_infancia": {
        		"condicion": "sí",
        		"cual": "peste negra"
        	},
        	"quirurgicas": {
        		"condicion": "no",
        		"cual": ""
        	},
        	"traumatismos": {
        		"condicion": "no",
        		"cual": ""
        	},
        	"infiltraciones": {
        		"condicion": "no",
        		"cual": ""
        	},
        	"hospitalizaciones": {
        		"condicion": "no",
        		"cual": ""
        	},
        	"perdida_conocimiento": {
        		"condicion": "no",
        		"cual": ""
        	},
        	"intolerancia_medicamento": {
        		"condicion": "no",
        		"cual": ""
        	},
        	"transfuciones": {
        		"condicion": "no",
        		"cual": ""
        	},
        	"medicamentos": {
        		"condicion": "no",
        		"cual": ""
        	},
        	"ets": {
        		"condicion": "no",
        		"cual": ""
        	}
        }'
        ;
        $historia->save();
    }
}
