<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\BuildFull;
use App\Models\BuildUnit;
use App\Models\SavedBuilds;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuildController extends Controller
{
    /// Process unit build
    public function buildSystemUnit(Products $products) {
        $check_cpu = BuildUnit::where('user_id', auth()->id())->value('processor_id');
        $check_cooler = BuildUnit::where('user_id', auth()->id())->value('cpu_cooler_id');
        $check_moba = BuildUnit::where('user_id', auth()->id())->value('moba_id');
        $check_memory = BuildUnit::where('user_id', auth()->id())->value('memory_id');
        $check_gpu = BuildUnit::where('user_id', auth()->id())->value('gpu_id');
        $check_storage = BuildUnit::where('user_id', auth()->id())->value('storage_id');
        $check_power_supply = BuildUnit::where('user_id', auth()->id())->value('power_supply_id');
        $check_case = BuildUnit::where('user_id', auth()->id())->value('case_id');
        $build = new BuildUnit;

        if (!is_null($check_cpu)) {
            $build = BuildUnit::find(auth()->id());

            // validate data
            if($build->processor_id == $products->id) {
                BuildUnit::where('user_id', auth()->id())->update(['cpu_cooler_id' => null]);
                BuildUnit::where('user_id', auth()->id())->update(['cpu_cooler_image' => null]);
                return redirect(route('user.unit.build.page'))->with('message','Cannot be the same (Processor and CPU Cooler)!');
            }
            elseif ($build->processor_id != $build->cpu_cooler_id) {
                $build->cpu_cooler_id = $products->id;
                $build->cpu_cooler_image = $products->product_image;
            }

            if(!is_null($check_cooler)) {
                $build = BuildUnit::find(auth()->id());

                // validate data
                if($build->cpu_cooler_id == $products->id) {
                    BuildUnit::where('user_id', auth()->id())->update(['moba_id' => null]);
                    BuildUnit::where('user_id', auth()->id())->update(['moba_image' => null]);
                    return redirect(route('user.unit.build.page'))->with('message','Cannot be the same (CPU Cooler and MOBO)!');
                }
                elseif ($build->cpu_cooler_id != $products->id) {
                    $build->moba_id = $products->id;
                    $build->moba_image = $products->product_image;
                }

                if(!is_null($check_moba)) {
                    $build = BuildUnit::find(auth()->id());

                    // validate data
                    if($build->moba_id == $products->id) {
                        BuildUnit::where('user_id', auth()->id())->update(['memory_id' => null]);
                        BuildUnit::where('user_id', auth()->id())->update(['memory_image' => null]);
                        return redirect(route('user.unit.build.page'))->with('message','Cannot be the same (MOBO and Memory)!');
                    }
                    elseif ($build->moba_id != $products->id) {
                        $build->memory_id = $products->id;
                        $build->memory_image = $products->product_image;
                    }

                    if(!is_null($check_memory)) {
                        $build = BuildUnit::find(auth()->id());

                        // validate data
                        if($build->memory_id == $products->id) {
                            BuildUnit::where('user_id', auth()->id())->update(['gpu_id' => null]);
                            BuildUnit::where('user_id', auth()->id())->update(['gpu_image' => null]);
                            return redirect(route('user.unit.build.page'))->with('message','Cannot be the same (Memory and GPU)!');
                        }
                        elseif ($build->memory_id != $products->id) {
                            $build->gpu_id = $products->id;
                            $build->gpu_image = $products->product_image;
                        }
                        
                        if(!is_null($check_gpu)) {
                            $build = BuildUnit::find(auth()->id());

                            // validate data
                            if($build->gpu_id == $products->id) {
                                BuildUnit::where('user_id', auth()->id())->update(['storage_id' => null]);
                                BuildUnit::where('user_id', auth()->id())->update(['storage_image' => null]);
                                return redirect(route('user.unit.build.page'))->with('message','Cannot be the same (GPU and Storage)!');
                            }
                            elseif ($build->gpu_id != $products->id) {
                                $build->storage_id = $products->id;
                                $build->storage_image = $products->product_image;
                            }

                            if(!is_null($check_storage)) {
                                $build = BuildUnit::find(auth()->id());

                                // validate data
                                if($build->storage_id == $products->id) {
                                    BuildUnit::where('user_id', auth()->id())->update(['power_supply_id' => null]);
                                    BuildUnit::where('user_id', auth()->id())->update(['power_supply_image' => null]);
                                    return redirect(route('user.unit.build.page'))->with('message','Cannot be the same (Storage and Power Supply)!');
                                }
                                elseif ($build->storage_id != $products->id) {
                                    $build->power_supply_id = $products->id;
                                    $build->power_supply_image = $products->product_image;
                                }

                                if(!is_null($check_power_supply)) {
                                    $build = BuildUnit::find(auth()->id());

                                    // validate data
                                    if($build->power_supply_id == $products->id) {
                                        BuildUnit::where('user_id', auth()->id())->update(['case_id' => null]);
                                        BuildUnit::where('user_id', auth()->id())->update(['case_image' => null]);
                                        return redirect(route('user.unit.build.page'))->with('message','Cannot be the same (Power Supply and Case)!');
                                    }
                                    elseif ($build->power_supply_id != $products->id) {
                                        $build->case_id = $products->id;
                                        $build->case_image = $products->product_image;
                                    }

                                    if(!is_null($check_case)) {
                                        $build = BuildUnit::find(auth()->id());

                                        // validate data
                                        if($build->case_id == $products->id) {
                                            BuildUnit::where('user_id', auth()->id())->update(['case_fan_id' => null]);
                                            BuildUnit::where('user_id', auth()->id())->update(['case_fan_image' => null]);
                                            return redirect(route('user.unit.build.page'))->with('message','Cannot be the same (Case and Case fan)!');
                                        }
                                        elseif ($build->case_id != $products->id) {
                                            $build->case_fan_id = $products->id;
                                            $build->case_fan_image = $products->product_image;
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }

            $build->save();

        } elseif (is_null($check_cpu)) {
            $build->user_id = auth()->id();
            $build->processor_id = $products->id;
            $build->processor_image = $products->product_image;

            $build->save();
        }
        
        return view('user.build_unit', [
            'build' => $build 
        ]);
    }

    public function buildFull(Products $products) {
        $check_cpu = BuildFull::where('user_id', auth()->id())->value('processor_id');
        $check_cooler = BuildFull::where('user_id', auth()->id())->value('cpu_cooler_id');
        $check_moba = BuildFull::where('user_id', auth()->id())->value('moba_id');
        $check_memory = BuildFull::where('user_id', auth()->id())->value('memory_id');
        $check_gpu = BuildFull::where('user_id', auth()->id())->value('gpu_id');
        $check_storage = BuildFull::where('user_id', auth()->id())->value('storage_id');
        $check_power_supply = BuildFull::where('user_id', auth()->id())->value('power_supply_id');
        $check_case = BuildFull::where('user_id', auth()->id())->value('case_id');
        $check_monitor = BuildFull::where('user_id', auth()->id())->value('monitor_id');
        $check_mouse = BuildFull::where('user_id', auth()->id())->value('mouse_id');
        $check_headset = BuildFull::where('user_id', auth()->id())->value('headset_id');
        $check_keyboard = BuildFull::where('user_id', auth()->id())->value('keyboard_id');
        $build = new BuildFull;

        if (!is_null($check_cpu)) {
            $build = BuildFull::find(auth()->id());

            // validate data
            if($build->processor_id == $products->id) {
                BuildFull::where('user_id', auth()->id())->update(['cpu_cooler_id' => null]);
                BuildFull::where('user_id', auth()->id())->update(['cpu_cooler_image' => null]);
                return redirect(route('user.full.build.page'))->with('message','Cannot be the same (Processor and CPU Cooler)!');
            }
            elseif ($build->processor_id != $products->id) {
                $build->cpu_cooler_id = $products->id;
                $build->cpu_cooler_image = $products->product_image;
            }
            
            if(!is_null($check_cooler)) {
                $build = BuildFull::find(auth()->id());

                // validate data
                if($build->cpu_cooler_id == $products->id) {
                    BuildFull::where('user_id', auth()->id())->update(['moba_id' => null]);
                    BuildFull::where('user_id', auth()->id())->update(['moba_image' => null]);
                    return redirect(route('user.full.build.page'))->with('message','Cannot be the same (CPU Cooler and MOBO)!');
                }
                elseif ($build->cpu_cooler_id != $products->id) {
                    $build->moba_id = $products->id;
                    $build->moba_image = $products->product_image;
                }

                if(!is_null($check_moba)) {
                    $build = BuildFull::find(auth()->id());

                    // validate data
                    if($build->moba_id == $products->id) {
                        BuildFull::where('user_id', auth()->id())->update(['memory_id' => null]);
                        BuildFull::where('user_id', auth()->id())->update(['memory_image' => null]);
                        return redirect(route('user.full.build.page'))->with('message','Cannot be the same (MOBO and Memory)!');
                    }
                    elseif ($build->moba_id != $products->id) {
                        $build->memory_id = $products->id;
                        $build->memory_image = $products->product_image;
                    }

                    if(!is_null($check_memory)) {
                        $build = BuildFull::find(auth()->id());

                        // validate data
                        if($build->memory_id == $products->id) {
                            BuildFull::where('user_id', auth()->id())->update(['gpu_id' => null]);
                            BuildFull::where('user_id', auth()->id())->update(['gpu_image' => null]);
                            return redirect(route('user.full.build.page'))->with('message','Cannot be the same (Memory and GPU)!');
                        }
                        elseif ($build->memory_id != $products->id) {
                            $build->gpu_id = $products->id;
                            $build->gpu_image = $products->product_image;
                        }

                        if(!is_null($check_gpu)) {
                            $build = BuildFull::find(auth()->id());

                            // validate data
                            if($build->gpu_id == $products->id) {
                                BuildFull::where('user_id', auth()->id())->update(['storage_id' => null]);
                                BuildFull::where('user_id', auth()->id())->update(['storage_image' => null]);
                                return redirect(route('user.full.build.page'))->with('message','Cannot be the same (GPU and Storage)!');
                            }
                            elseif ($build->gpu_id != $products->id) {
                                $build->storage_id = $products->id;
                                $build->storage_image = $products->product_image;
                            }

                            if(!is_null($check_storage)) {
                                $build = BuildFull::find(auth()->id());

                                // validate data
                                if($build->storage_id == $products->id) {
                                    BuildFull::where('user_id', auth()->id())->update(['power_supply_id' => null]);
                                    BuildFull::where('user_id', auth()->id())->update(['power_supply_image' => null]);
                                    return redirect(route('user.full.build.page'))->with('message','Cannot be the same (Storage and Power Supply!');
                                }
                                elseif ($build->storage_id != $products->id) {
                                    $build->power_supply_id = $products->id;
                                    $build->power_supply_image = $products->product_image;
                                }

                                if(!is_null($check_power_supply)) {
                                    $build = BuildFull::find(auth()->id());

                                    // validate data
                                    if($build->power_supply_id == $products->id) {
                                        BuildFull::where('user_id', auth()->id())->update(['case_id' => null]);
                                        BuildFull::where('user_id', auth()->id())->update(['case_image' => null]);
                                        return redirect(route('user.full.build.page'))->with('message','Cannot be the same (Power Supply and Case)!');
                                    }
                                    elseif ($build->power_supply_id != $products->id) {
                                        $build->case_id = $products->id;
                                        $build->case_image = $products->product_image;
                                    }

                                    if(!is_null($check_case)) {
                                        $build = BuildFull::find(auth()->id());

                                        // validate data
                                        if($build->case_id == $products->id) {
                                            BuildFull::where('user_id', auth()->id())->update(['monitor_id' => null]);
                                            BuildFull::where('user_id', auth()->id())->update(['monitor_image' => null]);
                                            return redirect(route('user.full.build.page'))->with('message','Cannot be the same (Case and Monitor)!');
                                        }
                                        elseif ($build->case_id != $products->id) {
                                            $build->monitor_id = $products->id;
                                            $build->monitor_image = $products->product_image;
                                        }

                                        if(!is_null($check_monitor)) {
                                            $build = BuildFull::find(auth()->id());

                                            // validate data
                                            if($build->monitor_id == $products->id) {
                                                BuildFull::where('user_id', auth()->id())->update(['keyboard_id' => null]);
                                                BuildFull::where('user_id', auth()->id())->update(['keyboard_image' => null]);
                                                return redirect(route('user.full.build.page'))->with('message','Cannot be the same (Monitor and Keyboard)!');
                                            }
                                            elseif ($build->monitor_id != $products->id) {
                                                $build->keyboard_id = $products->id;
                                                $build->keyboard_image = $products->product_image;
                                            }
                                            
                                            if(!is_null($check_keyboard)) {
                                                $build = BuildFull::find(auth()->id());

                                                // validate data
                                                if($build->keyboard_id == $products->id) {
                                                    BuildFull::where('user_id', auth()->id())->update(['mouse_id' => null]);
                                                    BuildFull::where('user_id', auth()->id())->update(['mouse_image' => null]);
                                                    return redirect(route('user.full.build.page'))->with('message','Cannot be the same (Keyboard and Mouse)!');
                                                }
                                                elseif ($build->keyboard_id != $products->id) {
                                                    $build->mouse_id = $products->id;
                                                    $build->mouse_image = $products->product_image;
                                                }

                                                if(!is_null($check_mouse)) {
                                                    $build = BuildFull::find(auth()->id());

                                                    // validate data
                                                    if($build->mouse_id == $products->id) {
                                                        BuildFull::where('user_id', auth()->id())->update(['headset_id' => null]);
                                                        BuildFull::where('user_id', auth()->id())->update(['headset_image' => null]);
                                                        return redirect(route('user.full.build.page'))->with('message','Cannot be the same (Mouse and Headset)!');
                                                    }
                                                    elseif ($build->mouse_id != $products->id) {
                                                        $build->headset_id = $products->id;
                                                        $build->headset_image = $products->product_image;
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }

            $build->save();

        } elseif (is_null($check_cpu)) {
            $build->user_id = auth()->id();
            $build->processor_id = $products->id;
            $build->processor_image = $products->product_image;

            $build->save();
        }
        
        return view('user.build_full', [
            'build' => $build 
        ]);
    }

    // saved-full-build process
    public function buildFullSaved(Request $request) {
        // dd($request);
        $savedFields = $request->validate([
            'processor_id' => ['required'], 
            'cpu_cooler_id' => ['required'], 
            'moba_id' => ['required'], 
            'memory_id' => ['required'], 
            'gpu_id' => ['required'], 
            'storage_id' => ['required'], 
            'power_supply_id' => ['required'], 
            'case_id' => ['required'], 
            'monitor_id' => ['required'], 
            'keyboard_id' => ['required'], 
            'mouse_id' => ['required'], 
            'headset_id' => ['required'],
            'category' => ['required']
        ]);

        $randomNumber = random_int(1, 99);
        $savedFields['user_id'] = auth()->id();
        $savedFields['name'] = auth()->user()->fname . " " . $randomNumber;
        SavedBuilds::create($savedFields);

        DB::table('build_fulls')->where('user_id', '=', auth()->id())->truncate();

        return redirect(route('user.full.build.page'))->with('message','Successfully saved!');
    }

    // saved-full-build process
    public function buildUnitSaved(Request $request) {
        // dd($request);
        $savedFields = $request->validate([
            'processor_id' => ['required'], 
            'cpu_cooler_id' => ['required'], 
            'moba_id' => ['required'], 
            'memory_id' => ['required'], 
            'gpu_id' => ['required'], 
            'storage_id' => ['required'], 
            'power_supply_id' => ['required'], 
            'case_id' => ['required'], 
            'case_fan_id' => ['required'],
            'category' => ['required']
        ]);

        $randomNumber = random_int(1, 99);
        $savedFields['user_id'] = auth()->id();
        $savedFields['name'] = auth()->user()->fname . " " . $randomNumber;
        SavedBuilds::create($savedFields);

        DB::table('build_units')->where('user_id', '=', auth()->id())->truncate();

        return redirect(route('user.full.build.page'))->with('message','Successfully saved!');
    }
}
