<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Admin;
use App\Models\Medicine;
use Illuminate\Foundation\Testing\RefreshDatabase;


class AddMedicineTest extends TestCase
{
    use RefreshDatabase;

     /** @test */
    public function OnlyAdminCanSeeMedicinePage()
    {
        $response= $this->get('admin/medicines')
            ->assertRedirect('admin/login');
    }


    /** @test */
    public function MedicineCanBeAddedThroughForm(){

        $admin = Admin::factory()->create();
        //$this->actingAs(factory(Admin::class,'admin'))->create();
        $this->withoutExceptionHandling();

        $response = $this->actingAs($admin,'admin')
            ->post('admin/add-edit-medicine',[
            'medicineName' => 'Test Medicine',
            'manufacturerId' => 4,
            'type' => 'Tablet',
            'quantity'=>10,
            'generic'=>'Calcium',
            'dose'=>50,
            'medicinePrice'=>500,
            'stock'=>200,
            'description'=>'This....',
            //'medicineImage'=>'34388',
        ]);

        $this->assertCount(1,Medicine::all());
}

}
