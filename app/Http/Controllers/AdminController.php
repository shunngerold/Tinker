<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\ComputerFinder;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    // Show Landing Page
    public function showLanding() {
        return view('admin.landing');
    }
    // Show CMS Forms : each components
    public function showProcessor(Products $products) {
        return view('admin.processor', ['products' => $products]);
    }
    public function showCPUCooler() {
        return view('admin.cpu_cooler');
    }
    public function showMOBA() {
        return view('admin.moba');
    }
    public function showMemory() {
        return view('admin.memory');
    }
    public function showGPU() {
        return view('admin.gpu');
    }
    public function showStorage() {
        return view('admin.storage');
    }
    public function showPowerSupply() {
        return view('admin.power_supply');
    }
    public function showCase() {
        return view('admin.case');
    }
    public function showCaseFan() {
        return view('admin.case_fan');
    }
    public function showMonitor() {
        return view('admin.monitor');
    }
    public function showKeyboard() {
        return view('admin.keyboard');
    }
    public function showHeadset() {
        return view('admin.headset');
    }
    public function showMouse() {
        return view('admin.mouse');
    }
    // ==============================================================
    // Data entry : each component
    public function entryProcessor(Request $request) {
        // dd($request);
        $formFields = $request->validate([
            'brand' => ['required'],
            'name' => ['required', Rule::unique('products','name')],
            'quantity' => ['required'],
            'price' => ['required'],
            'desc' => ['required'],
            'product_image' => 'required|mimes:png,jpg,jpeg',
            'category' => ['required'],

            'clock_frequency' => ['required'],
            'cores' => ['required'],
            'socket_type' => ['required'],
            'thread' => ['required'],
        ]);

        if ($request->hasFile('product_image')) {
            $formFields['product_image'] = $request->file('product_image')->store('product_image','public');
        }
        Products::create($formFields);
        return redirect(route('admin.processor'))->with('message','Successfuly Added!');
    }
    public function entryCPUCooler(Request $request) {
        // dd($request);
        $formFields = $request->validate([
            'brand' => ['required'],
            'name' => ['required', Rule::unique('products','name')],
            'quantity' => ['required'],
            'price' => ['required'],
            'desc' => ['required'],
            'product_image' => 'required|mimes:png,jpg,jpeg',
            'category' => ['required'],

            'socket_type' => ['required'],
            'fan_size' => ['required'],
            'fan_speed' => ['required'],
            'air_flow' => ['required'],
        ]);

        if ($request->hasFile('product_image')) {
            $formFields['product_image'] = $request->file('product_image')->store('product_image','public');
        }
        Products::create($formFields);
        return redirect(route('admin.cpu.cooler'))->with('message','Successfuly Added!');
    }
    public function entryMOBA(Request $request) {
        // dd($request);
        $formFields = $request->validate([
            'brand' => ['required'],
            'name' => ['required', Rule::unique('products','name')],
            'quantity' => ['required'],
            'price' => ['required'],
            'desc' => ['required'],
            'product_image' => 'required|mimes:png,jpg,jpeg',
            'category' => ['required'],

            'form_factor' => ['required'],
            'cpu_socket' => ['required'],
            'ram_slots' => ['required'],
            'multiple_gpu' => ['required'],
        ]);

        if ($request->hasFile('product_image')) {
            $formFields['product_image'] = $request->file('product_image')->store('product_image','public');
        }
        Products::create($formFields);
        return redirect(route('admin.moba'))->with('message','Successfuly Added!');
    }
    public function entryMemory(Request $request) {
        // dd($request);
        $formFields = $request->validate([
            'brand' => ['required'],
            'name' => ['required', Rule::unique('products','name')],
            'quantity' => ['required'],
            'price' => ['required'],
            'desc' => ['required'],
            'product_image' => 'required|mimes:png,jpg,jpeg',
            'category' => ['required'],

            'memory_size' => ['required'],
            'ram_type' => ['required'],
            'memory_speed' => ['required'],
            'physical_size' => ['required'],
        ]);

        if ($request->hasFile('product_image')) {
            $formFields['product_image'] = $request->file('product_image')->store('product_image','public');
        }
        Products::create($formFields);
        return redirect(route('admin.memory'))->with('message','Successfuly Added!');
    }
    public function entryGPU(Request $request) {
        // dd($request);
        $formFields = $request->validate([
            'brand' => ['required'],
            'name' => ['required', Rule::unique('products','name')],
            'quantity' => ['required'],
            'price' => ['required'],
            'desc' => ['required'],
            'product_image' => 'required|mimes:png,jpg,jpeg',
            'category' => ['required'],

            'memory_size' => ['required'],
            'memory_type' => ['required'],
            'memory_clock' => ['required'],
            'gpu_clock' => ['required'],
        ]);

        if ($request->hasFile('product_image')) {
            $formFields['product_image'] = $request->file('product_image')->store('product_image','public');
        }
        Products::create($formFields);
        return redirect(route('admin.gpu'))->with('message','Successfuly Added!');
    }
    public function entryStorage(Request $request) {
        // dd($request);
        $formFields = $request->validate([
            'brand' => ['required'],
            'name' => ['required', Rule::unique('products','name')],
            'quantity' => ['required'],
            'price' => ['required'],
            'desc' => ['required'],
            'product_image' => 'required|mimes:png,jpg,jpeg',
            'category' => ['required'],

            'storage_type' => ['required'],
            'storage_capacity' => ['required'],
            'transfer_speed' => ['required'],
            'cache_speed' => ['required'],
        ]);

        if ($request->hasFile('product_image')) {
            $formFields['product_image'] = $request->file('product_image')->store('product_image','public');
        }
        Products::create($formFields);
        return redirect(route('admin.store'))->with('message','Successfuly Added!');
    }
    public function entryPowerSupply(Request $request) {
        // dd($request);
        $formFields = $request->validate([
            'brand' => ['required'],
            'name' => ['required', Rule::unique('products','name')],
            'quantity' => ['required'],
            'price' => ['required'],
            'desc' => ['required'],
            'product_image' => 'required|mimes:png,jpg,jpeg',
            'category' => ['required'],

            'form_factor' => ['required'],
            'wattage' => ['required'],
            'efficiency_rate' => ['required'],
            'modularity' => ['required'],
        ]);

        if ($request->hasFile('product_image')) {
            $formFields['product_image'] = $request->file('product_image')->store('product_image','public');
        }
        Products::create($formFields);
        return redirect(route('admin.power.supply'))->with('message','Successfuly Added!');
    }
    public function entryCase(Request $request) {
        // dd($request);
        $formFields = $request->validate([
            'brand' => ['required'],
            'name' => ['required', Rule::unique('products','name')],
            'quantity' => ['required'],
            'price' => ['required'],
            'desc' => ['required'],
            'product_image' => 'required|mimes:png,jpg,jpeg',
            'category' => ['required'],

            'form_factor' => ['required'],
            'physical_size' => ['required'],
            'socket_type' => ['required'],
            'case_size' => ['required'],
        ]);

        if ($request->hasFile('product_image')) {
            $formFields['product_image'] = $request->file('product_image')->store('product_image','public');
        }
        Products::create($formFields);
        return redirect(route('admin.case'))->with('message','Successfuly Added!');
    }
    public function entryCaseFan(Request $request) {
        // dd($request);
        $formFields = $request->validate([
            'brand' => ['required'],
            'name' => ['required', Rule::unique('products','name')],
            'quantity' => ['required'],
            'price' => ['required'],
            'desc' => ['required'],
            'product_image' => 'required|mimes:png,jpg,jpeg',
            'category' => ['required'],

            'fan_size' => ['required'],
            'fan_speed' => ['required'],
            'air_flow' => ['required'],
            'physical_size' => ['required'],
        ]);

        if ($request->hasFile('product_image')) {
            $formFields['product_image'] = $request->file('product_image')->store('product_image','public');
        }
        Products::create($formFields);
        return redirect(route('admin.case.fan'))->with('message','Successfuly Added!');
    }
    public function entryMonitor(Request $request) {
        // dd($request);
        $formFields = $request->validate([
            'brand' => ['required'],
            'name' => ['required', Rule::unique('products','name')],
            'quantity' => ['required'],
            'price' => ['required'],
            'desc' => ['required'],
            'product_image' => 'required|mimes:png,jpg,jpeg',
            'category' => ['required'],
        ]);

        if ($request->hasFile('product_image')) {
            $formFields['product_image'] = $request->file('product_image')->store('product_image','public');
        }
        Products::create($formFields);
        return redirect(route('admin.monitor'))->with('message','Successfuly Added!');
    }
    public function entryKeyboard(Request $request) {
        // dd($request);
        $formFields = $request->validate([
            'brand' => ['required'],
            'name' => ['required', Rule::unique('products','name')],
            'quantity' => ['required'],
            'price' => ['required'],
            'desc' => ['required'],
            'product_image' => 'required|mimes:png,jpg,jpeg',
            'category' => ['required'],
        ]);

        if ($request->hasFile('product_image')) {
            $formFields['product_image'] = $request->file('product_image')->store('product_image','public');
        }
        Products::create($formFields);
        return redirect(route('admin.keyboard'))->with('message','Successfuly Added!');
    }
    public function entryHeadset(Request $request) {
        // dd($request);
        $formFields = $request->validate([
            'brand' => ['required'],
            'name' => ['required', Rule::unique('products','name')],
            'quantity' => ['required'],
            'price' => ['required'],
            'desc' => ['required'],
            'product_image' => 'required|mimes:png,jpg,jpeg',
            'category' => ['required'],
        ]);

        if ($request->hasFile('product_image')) {
            $formFields['product_image'] = $request->file('product_image')->store('product_image','public');
        }
        Products::create($formFields);
        return redirect(route('admin.headset'))->with('message','Successfuly Added!');
    }
    public function entryMouse(Request $request) {
        // dd($request);
        $formFields = $request->validate([
            'brand' => ['required'],
            'name' => ['required', Rule::unique('products','name')],
            'quantity' => ['required'],
            'price' => ['required'],
            'desc' => ['required'],
            'product_image' => 'required|mimes:png,jpg,jpeg',
            'category' => ['required'],
        ]);

        if ($request->hasFile('product_image')) {
            $formFields['product_image'] = $request->file('product_image')->store('product_image','public');
        }
        Products::create($formFields);
        return redirect(route('admin.mouse'))->with('message','Successfuly Added!');
    }
    // show products
    public function showProducts(Products $products) {
        // dd($products);
        return view('admin.product_list', ['products' => Products::latest()->paginate(5)]);
    }
    // delete product
    public function destroyProduct(Products $products) {
        $products->delete();
        return redirect(route('admin.products'))->with('message','Listing deleted successfully!');
    }
    // show computer finder full
    public function showFinderFull() {
        // dd(Products::all());
        return view('admin.finder_full');
    }
    // show computer finder full
    public function processFinderFull(Request $request) {
        $formFields = $request->validate([
            'processor_id' => ['required'],
            'cpu_cooler_id' => ['required'],
            'moba_id' => ['required'],
            'memory_id' => ['required'],
            'gpu_id' => ['required'],
            'storage_id' => ['required'],
            'power_supply_id' => ['required'],
            'case_id' => ['required'],
            'monitor_id' => ['required'],
            'mouse_id' => ['required'],
            'headset_id' => ['required'],
            'keyboard_id' => ['required'],
            'image' => 'required|mimes:png,jpg,jpeg',
            'type' => ['required'],
            'storage' => ['required'],
            'endurance' => ['required'],
            'budget' => ['required'],
            'peripherals' => ['required'],
            'category' => ['required'],
        ]);

        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('finder_image','public');
        }

        ComputerFinder::create($formFields);
        return redirect(route('admin.finder.full'))->with('message','Successfuly Added!');
    }
    // show computer finder unit
    public function showFinderUnit() {
        // dd(Products::all());
        return view('admin.finder_unit');
    }
    // show computer finder unit
    public function processFinderUnit(Request $request) {
        $formFields = $request->validate([
            'processor_id' => ['required'],
            'cpu_cooler_id' => ['required'],
            'moba_id' => ['required'],
            'memory_id' => ['required'],
            'gpu_id' => ['required'],
            'storage_id' => ['required'],
            'power_supply_id' => ['required'],
            'case_id' => ['required'],
            'case_fan_id' => ['required'],
            'image' => 'required|mimes:png,jpg,jpeg',
            'type' => ['required'],
            'storage' => ['required'],
            'endurance' => ['required'],
            'budget' => ['required'],
            'aesthetic' => ['required'],
            'category' => ['required'],
        ]);

        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('finder_image','public');
        }

        ComputerFinder::create($formFields);
        return redirect(route('admin.finder.unit'))->with('message','Successfuly Added!');
    }
}
