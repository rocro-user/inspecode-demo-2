class AwfulController < ApplicationController
  def index
    if /#{params[:long_param]}/ =~ "abc"
      @service_stoppable = true
    else
      send(params[:method])
    end

    render params[:template]
  end

  def divide_by_zero
    undefined = 1 / 0
  end
end
