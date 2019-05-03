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
        		"condicion": "no",
        		"familiar": "Aquí van los familiares",
            "cual":"ninguna"
        	},
        	"Enfermedades del sistema nervioso": {
            "condicion": "no",
        		"familiar": "Aquí van los familiares",
            "cual":"ninguna"
        	},
        	"Síndromes": {
            "condicion": "no",
        		"familiar": "Aquí van los familiares",
            "cual":"ninguna"
        	},
        	"Malformaciones": {
            "condicion": "no",
        		"familiar": "Aquí van los familiares",
            "cual":"ninguna"
        	},
        	"Diabetes": {
            "condicion": "no",
        		"familiar": "Aquí van los familiares",
            "cual":"ninguna"
        	},
        	"Hipertención arterial sistemática": {
            "condicion": "no",
        		"familiar": "Aquí van los familiares",
            "cual":"ninguna"
        	},
        	"Cancer": {
            "condicion": "no",
        		"familiar": "Aquí van los familiares",
            "cual":"ninguna"
        	},
        	"Cardiopatías": {
            "condicion": "no",
        		"familiar": "Aquí van los familiares",
            "cual":"ninguna"
        	},
        	"Vasculares": {
            "condicion": "no",
        		"familiar": "Aquí van los familiares",
            "cual":"ninguna"
        	},
        	"Pulmonares": {
            "condicion": "no",
        		"familiar": "Aquí van los familiares",
            "cual":"ninguna"
        	},
        	"Heptopatías": {
            "condicion": "no",
        		"familiar": "Aquí van los familiares",
            "cual":"ninguna"
        	},
        	"Nefropatías": {
            "condicion": "no",
        		"familiar": "Aquí van los familiares",
            "cual":"ninguna"
        	},
        	"Digestivos": {
            "condicion": "no",
        		"familiar": "Aquí van los familiares",
            "cual":"ninguna"
        	},
        	"Endocrinopatías": {
            "condicion": "no",
        		"familiar": "Aquí van los familiares",
            "cual":"ninguna"
        	},
        	"Transtornos hematológicos": {
            "condicion": "no",
        		"familiar": "Aquí van los familiares",
            "cual":"ninguna"
        	},
        	"Displidemias": {
            "condicion": "no",
        		"familiar": "Aquí van los familiares",
            "cual":"ninguna"
        	},
        	"Otros": {
            "condicion": "no",
        		"familiar": "Aquí van los familiares",
            "cual":"ninguna"
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
