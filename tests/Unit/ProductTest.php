<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

class ProductTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /**
     * Test creating a product (Create operation)
     */
    public function test_can_create_product()
    {
        $productData = [
            'name' => 'Test Bearing Product',
            'description' => 'This is a test bearing product',
            'price' => 99.99,
            'stock' => 50,
            'image' => 'test-image.jpg',
            'brand' => 'Test Brand',
            'category' => 'Bearings',
            'part_number' => 'TB-001',
            'inner_diameter' => 10.5,
            'outer_diameter' => 20.0,
            'width' => 5.0,
            'material' => 'Steel',
            'seal_type' => 'Sealed',
            'load_rating' => 1000,
            'specifications' => ['feature1' => 'value1', 'feature2' => 'value2']
        ];

        $product = Product::create($productData);

        $this->assertInstanceOf(Product::class, $product);
        $this->assertDatabaseHas('products', [
            'name' => 'Test Bearing Product',
            'price' => 99.99,
            'stock' => 50,
            'brand' => 'Test Brand'
        ]);
        $this->assertEquals('Test Bearing Product', $product->name);
        $this->assertEquals(99.99, $product->price);
    }

    /**
     * Test reading a product (Read operation)
     */
    public function test_can_read_product()
    {
        $product = Product::create([
            'name' => 'Read Test Product',
            'description' => 'Product for read testing',
            'price' => 75.50,
            'stock' => 25,
            'image' => 'read-test.jpg',
            'brand' => 'Read Brand',
            'category' => 'Test Category',
            'part_number' => 'RT-001'
        ]);

        $foundProduct = Product::find($product->id);

        $this->assertNotNull($foundProduct);
        $this->assertEquals($product->id, $foundProduct->id);
        $this->assertEquals('Read Test Product', $foundProduct->name);
        $this->assertEquals(75.50, $foundProduct->price);
    }

    /**
     * Test updating a product (Update operation)
     */
    public function test_can_update_product()
    {
        $product = Product::create([
            'name' => 'Original Product',
            'description' => 'Original description',
            'price' => 100.00,
            'stock' => 30,
            'image' => 'original.jpg',
            'brand' => 'Original Brand',
            'category' => 'Original Category',
            'part_number' => 'OP-001'
        ]);

        $updateData = [
            'name' => 'Updated Product',
            'price' => 120.00,
            'stock' => 40,
            'brand' => 'Updated Brand'
        ];

        $product->update($updateData);

        $this->assertEquals('Updated Product', $product->name);
        $this->assertEquals(120.00, $product->price);
        $this->assertEquals(40, $product->stock);
        $this->assertEquals('Updated Brand', $product->brand);

        $this->assertDatabaseHas('products', [
            'id' => $product->id,
            'name' => 'Updated Product',
            'price' => 120.00,
            'stock' => 40
        ]);
    }

    /**
     * Test deleting a product (Delete operation)
     */
    public function test_can_delete_product()
    {
        $product = Product::create([
            'name' => 'Product to Delete',
            'description' => 'This product will be deleted',
            'price' => 50.00,
            'stock' => 10,
            'image' => 'delete-test.jpg',
            'brand' => 'Delete Brand',
            'category' => 'Delete Category',
            'part_number' => 'DT-001'
        ]);

        $productId = $product->id;

        $product->delete();

        $this->assertDatabaseMissing('products', [
            'id' => $productId
        ]);

        $deletedProduct = Product::find($productId);
        $this->assertNull($deletedProduct);
    }

    /**
     * Test product fillable attributes
     */
    public function test_product_fillable_attributes()
    {
        $product = new Product();
        
        $expectedFillable = [
            'name',
            'description',
            'price',
            'stock',
            'image',
            'brand',
            'category',
            'part_number',
            'inner_diameter',
            'outer_diameter',
            'width',
            'material',
            'seal_type',
            'load_rating',
            'specifications'
        ];

        $this->assertEquals($expectedFillable, $product->getFillable());
    }

    /**
     * Test product casts
     */
    public function test_product_casts()
    {
        $product = Product::create([
            'name' => 'Cast Test Product',
            'description' => 'Testing casts',
            'price' => '99.99',
            'stock' => '50',
            'specifications' => ['key' => 'value'],
            'brand' => 'Cast Brand',
            'category' => 'Cast Category',
            'part_number' => 'CT-001'
        ]);

        // Laravel's "decimal:2" cast returns a string (preserves precision),
        // so assert string value and numeric equivalence rather than float type.
        $this->assertIsString($product->price);
        $this->assertEquals('99.99', (string) $product->price);
        $this->assertIsInt($product->stock);
        $this->assertIsArray($product->specifications);
    }

    /**
     * Test product validation (optional - requires validation rules in model or form request)
     */
    public function test_product_requires_name()
    {
        $this->expectException(\Illuminate\Database\QueryException::class);

        Product::create([
            'description' => 'Product without name',
            'price' => 50.00,
            'stock' => 10
        ]);
    }
}
